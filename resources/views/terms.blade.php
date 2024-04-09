<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Erik Roganský, Roganský, Erik">
    <meta name="description" content="Informatics student with a passion for learning and growth, skilled in web and software development as well as translation work.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content='Erik Roganský, roganskyerik@gmail.com'>
    <meta name="google-site-verification" content="-fH-o9fmZnq5NLOP63n2X1sTgt3zMJxmoqezZzFcGKU" />
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" href="/img/logo-tr.png">
    <link rel="preload" href="https://fonts.adobe.com/fonts/cofo-sans-variable" as="font" crossorigin="anonymous">
    <script src="/scripts/header.js" defer></script>
    <script src="https://kit.fontawesome.com/ac7b36a7a6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Terms and Conditions</title>
</head>
<body>
    <header>
        <div class="headerContainer" id="header">
            <div></div>
            <div class="headerCategories">
                <div class="headerCategoriesGrid">
                    <a href="{{ url('/#intro') }}">{{ __('Home') }}</a>
                    <a href="{{ url('/#services') }}">{{ __('Services') }}</a>
                    <a href="{{ url('/#education') }}">{{ __('Education') }}</a>
                    <a href="{{ url('/#skills') }}">{{ __('Skills') }}</a>
                    <a href="{{ url('/#languages') }}">{{ __('Languages') }}</a>
                    <a href="{{ url('/#experience') }}">{{ __('Experience') }}</a>
                    <a href="{{ url('/#contact') }}">{{ __('Contact') }}</a>
                </div>
            </div>
            <div class="headerLanguage">
                <img id="selectedLanguage" src="{{ __('/img/us.png') }}" alt="{{ __('ENG') }}">
                <div class="dropdownContent">
                    <img src="{{ __('/img/sk.png') }}" alt="{{ __('SVK') }}" onclick="location.href = '{{ route('langSwitch', __('sk')) }}';">
                    <img src="{{ __('/img/us.png') }}" alt="{{ __('ENG') }}" onclick="changeLanguage('ENG')" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <button onclick="goToTop()" id="goToTopBtn" class="fa-solid fa-arrow-up"></button>

    <section class="termsSection">
    <h1>{{ __('Terms and Conditions') }}</h1>
    <p>{{ __('Welcome to my website!') }}</p>
    <p>{{ __('These terms and conditions outline the rules and regulations for the use of my website, located at') }} <a href="https://roganskyerik.com">roganskyerik.com</a>.</p>
    <p>{{ __('By accessing this website, it is presumed that you accept and agree to abide by these terms and conditions. If you do not agree with any part of these terms and conditions, kindly refrain from utilizing my website.') }}</p>

    <h2>{{ __('License:') }}</h2>
    <p>{{ __('Unless otherwise stated, I, as the owner of this website, own the intellectual property rights for all material on this platform. All such rights are reserved. Access to this website is granted solely for personal use, subject to the restrictions outlined in these terms and conditions.') }}</p>
    <p>{{ __('You must not:') }}</p>
    <ul>
        <li>{{ __('Copy or republish material from my website') }}</li>
        <li>{{ __('Sell, rent, or sub-license material from my website') }}</li>
        <li>{{ __('Reproduce, duplicate or copy material from my website') }}</li>
        <li>{{ __('Redistribute content from my website') }}</li>
    </ul>
    <p>{{ __('This Agreement shall begin on the date hereof.') }}</p>

    <h2>{{ __('Hyperlinking to my Content:') }}</h2>
    <p>{{ __('The following organizations may link to my website without prior written approval:') }}</p>
    <ul>
        <li>{{ __('Government agencies;') }}</li>
        <li>{{ __('Search engines;') }}</li>
        <li>{{ __('News organizations;') }}</li>
        <li>{{ __('Online directory distributors may link to my website in the same manner as they hyperlink to the Websites of other listed businesses; and') }}</li>
        <li>{{ __('System-wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to my website.') }}</li>
    </ul>
    <p>{{ __('These organizations may link to home page, to publications, or to other website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement, or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.') }}</p>
    <p>{{ __('I may consider and approve other link requests from the following types of organizations:') }}</p>
    <ul>
        <li>{{ __('commonly-known consumer and/or business information sources;') }}</li>
        <li>{{ __('associations or other groups representing charities;') }}</li>
        <li>{{ __('online directory distributors;') }}</li>
        <li>{{ __('internet portals;') }}</li>
        <li>{{ __('accounting, law, and consulting firms; and') }}</li>
        <li>{{ __('educational institutions and trade associations.') }}</li>
    </ul>
    <p>{{ __('I will approve link requests from these organizations if I decide that: (a) the link would not make me look unfavorably to myself or to my accredited businesses; (b) the organization does not have any negative records with me; (c) the benefits to me from the visibility of the hyperlink compensate for the absence of explicit endorsement of my website; and (d) the link is in the context of general resource information.') }}</p>
    <p>{{ __('These organizations may link to home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement, or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.') }}</p>
    <p>{{ __('If you are one of the organizations listed in paragraph 2 above and are interested in linking to my website, you must inform me by sending an e-mail. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to my website, and a list of the URLs on my site to which you would like to link.') }}</p>
    <p>{{ __('Approved organizations may hyperlink to my website as follows:') }}</p>
    <ul>
        <li>{{ __('By use of my name; or') }}</li>
        <li>{{ __('By use of the uniform resource locator being linked to; or') }}</li>
        <li>{{ __('Using any other description of my website being linked to that makes sense within the context and format of content on the linking party’s site.') }}</li>
    </ul>
    <p>{{ __('No use of my logo or other artwork will be allowed for linking absent a trademark license agreement.') }}</p>

    <h2>{{ __('Content Liability:') }}</h2>
    <p>{{ __('I shall not be held responsible for any content that appears on your Website. You agree to protect and defend me against all claims that are raised on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene, or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.') }}</p>

    <h2>{{ __('Reservation of Rights:') }}</h2>
    <p>{{ __('I reserve the right to request that you remove all links or any particular link to my website. You approve to immediately remove all links to my website upon request. I also reserve the right to amend these terms and conditions and its linking policy at any time. By continuously linking to my website, you agree to be bound to and follow these linking terms and conditions.') }}</p>

    <h2>{{ __('Removal of links from my website:') }}</h2>
    <p>{{ __('If you find any link on my website that is offensive for any reason, you are free to contact and inform me at any moment. I will consider requests to remove links, but I am not obligated to or so or to respond to you directly.') }}</p>

    <h2>{{ __('Disclaimer:') }}</h2>
    <p>{{ __('To the maximum extent permitted by applicable law, I exclude all representations, warranties, and conditions relating to my website and the use of this website. Nothing in this disclaimer will:') }}</p>
    <ul>
        <li>{{ __('limit or exclude my or your liability for death or personal injury;') }}</li>
        <li>{{ __('limit or exclude my or your liability for fraud or fraudulent misrepresentation;') }}</li>
        <li>{{ __('limit any of my or your liabilities in any way that is not permitted under applicable law; or') }}</li>
        <li>{{ __('exclude any of my or your liabilities that may not be excluded under applicable law.') }}</li>
    </ul>
    <p>{{ __('The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort, and for breach of statutory duty.') }}</p>
    <p>{{ __('As long as the website and the information and services on the website are provided free of charge, I will not be liable for any loss or damage of any nature.') }}</p>
    </section>

    <footer>
        <div class="footerContainer">
            <div class="copyright">
                <label>{{ __('Made with ❤️ by Erik Roganský') }}</label>
                <label>{{ __('© Erik Roganský 2024. All rights reserved.') }}</label>
                <div class="footerIcons">
                    <a href="https://facebook.com/erik.rogansky" target="_blank" class="fa-brands fa-facebook-f"></a>
                    <a href="https://www.linkedin.com/in/erikrogansky/" target="_blank" class="fa-brands fa-linkedin-in"></a>
                    <a href="https://instagram.com/erik_rogansky" target="_blank" class="fa-brands fa-instagram"></a>
                    <a href="https://github.com/erikrogansky" target="_blank" class="fa-brands fa-github"></a>
                </div>
            </div>
            <div class="terms">
                <a href="{{ url('/terms') }}">{{ __('Terms and Conditions') }}</a>
                <a href="{{ url('/privacy') }}">{{ __('Privacy Policy') }}</a>
            </div>
        </div>
    </footer>
</body>
</html>
