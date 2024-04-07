<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;
use App\Models\VisitorsInformation;

class CollectInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $sessionId = Session::getId();

        $ipAddress = $request->ip();

        $userAgent = $request->header('User-Agent');

        $agent = new Agent();
        $deviceInformation = [
            'device_type' => $agent->device(),
            'platform' => $agent->platform(),
            'browser' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
        ];

        $locationData = Location::get($ipAddress);
        $geolocation = [
            'country' => $locationData->countryName ?? null,
            'region' => $locationData->regionName ?? null,
            'city' => $locationData->cityName ?? null,
            'latitude' => $locationData->latitude ?? null,
            'longitude' => $locationData->longitude ?? null,
        ];

        if (!$this->isSessionExists($sessionId)) {
            VisitorsInformation::create([
                'session_id' => $sessionId,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'device_information' => json_encode($deviceInformation),
                'geolocation' => json_encode($geolocation),
            ]);
        }        

        return $next($request);
    }

    private function isSessionExists($sessionId)
    {
        return DB::table('visitors_information')->where('session_id', $sessionId)->exists();
    }
}
