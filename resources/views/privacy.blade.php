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
    <title>Privacy Policy</title>
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
                <img id="selectedLanguage" src="/img/us.png" alt="ENG">
                <div class="dropdownContent">
                    <img src="/img/sk.png" alt="SVK" onclick="location.href = '{{ route('langSwitch', 'sk') }}';">
                    <img src="/img/us.png" alt="ENG" onclick="changeLanguage('ENG')" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <button onclick="goToTop()" id="goToTopBtn" class="fa-solid fa-arrow-up"></button>

    <section class="termsSection">
    <h1>Privacy Policy</h1>

<p><strong>Effective Date:</strong> 7. 4. 2024</p>

<p>Dear Visitor,</p>

<p>Thank you for visiting my personal website, accessible via <a href="https://roganskyerik.com">roganskyerik.com</a>. Your privacy is of utmost importance to me, and I appreciate the trust you place in me. Hence, I have formulated this Privacy Policy to delineate the types of personal information collected on this website, elucidate their purpose, and outline the measures taken to safeguard your information.</p>

<h2>1. Information Collection:</h2>

<ol type="a">
    <li><strong>Contact Form:</strong> When utilizing the contact form on <a href="https://roganskyerik.com">roganskyerik.com</a>, I gather your name, email address, and any accompanying message or information provided.</li>
    <li><strong>Automatically Collected Information:</strong> Information regarding your system and browser is automatically gathered to enhance comprehension of website visitors. This includes your IP address and details pertaining to your browser and operating system.</li>
    <li><strong>Cookies:</strong> Essential cookies are employed for operational purposes, such as session management and security. These cookies do not track personal information or user behavior. By using this website, you implicitly consent to the utilization of such cookies. Adjusting your browser settings may be necessary if you disagree, though it may impact your website experience.</li>
</ol>

<h2>2. Utilization of Information:</h2>

<ol type="a">
    <li><strong>Contact Form Data:</strong> Information garnered through the contact form is exclusively employed to address your inquiries or messages.</li>
    <li><strong>Email Correspondence:</strong> Any email correspondence initiated through <a href="https://roganskyerik.com">roganskyerik.com</a> is utilized for direct communication and remains confidential, devoid of third-party sharing unless explicit consent is provided.</li>
    <li><strong>Database Storage:</strong> Messages submitted through the contact form are securely stored in my database for archival purposes. Access to this information is restricted solely to myself and authorized personnel and will not be disseminated to third parties unless legally mandated.</li>
</ol>

<h2>3. Protection of Information:</h2>

<p>Reasonable measures are undertaken to protect your personal information against unauthorized access, disclosure, or alteration. These encompass secure storage practices and routine security evaluations of the website.</p>

<h2>4. Your Rights:</h2>

<p>You retain the right to request access to the personal information collected, rectification of inaccuracies, and deletion of said information from my records, subject to any legal obligations necessitating retention.</p>

<h2>5. Children’s Privacy:</h2>

<p>My personal portfolio website is not intended for individuals under the age of 13, and I do not knowingly collect personal information from such individuals. Any inadvertent collection will promptly be rectified through deletion upon awareness.</p>

<h2>6. Changes to this Privacy Policy:</h2>

<p>Periodic updates to this Privacy Policy may occur to reflect alterations in information practices. Significant revisions will be communicated by posting the revised Privacy Policy on <a href="https://roganskyerik.com">roganskyerik.com</a>.</p>

<h2>7. Contact Information:</h2>

<p>Should you have any queries or concerns regarding this Privacy Policy or my privacy practices, please do not hesitate to contact me at <a href="mailto:info@roganskyerik.com">info@roganskyerik.com</a> or via the contact form at <a href="https://roganskyerik.com/#contact">roganskyerik.com</a>.</p>

<p>By utilizing <a href="https://roganskyerik.com">roganskyerik.com</a>, you consent to the collection and utilization of your information as delineated in this Privacy Policy.</p>

<p>Thank you for visiting my personal portfolio website.</p>

<p class="wishPriv">Sincerely,</p>

<p class="namePriv">Erik Roganský</p>
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
