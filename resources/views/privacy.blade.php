<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Erik Roganský, Roganský, Erik">
    <meta name="description" content="Aspiring informatics student with a passion for learning and growth, skilled in web and software development. Let's connect for opportunities and collaborations.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name='author' content='Erik Roganský, roganskyerik@gmail.com'>
    <meta name="google-site-verification" content="-fH-o9fmZnq5NLOP63n2X1sTgt3zMJxmoqezZzFcGKU" />
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" href="/img/logo-tr.png">
    <link rel="preload" href="https://fonts.adobe.com/fonts/cofo-sans-variable" as="font" crossorigin="anonymous">
    <script src="/scripts/script.js" defer></script>
    <script src="https://kit.fontawesome.com/ac7b36a7a6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Erik Roganský</title>
</head>
<body>
    <header>
        <div class="headerContainer" id="header">
            <div></div>
            <div class="headerCategories">
                <div class="headerCategoriesGrid">
                    <a href="#intro">{{ __('Home') }}</a>
                    <a href="#services">{{ __('Services') }}</a>
                    <a href="#education">{{ __('Education') }}</a>
                    <a href="#skills">{{ __('Skills') }}</a>
                    <a href="#languages">{{ __('Languages') }}</a>
                    <a href="#experience">{{ __('Experience') }}</a>
                    <a href="#contact">{{ __('Contact') }}</a>
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

    <section>
        
    </section>

    <footer>
        <div class="footerContainer">
            <div class="copyright">
                <label>{{ __('Made with ❤️ by Erik Roganský') }}</label>
                <label>{{ __('© Erik Roganský 2024. All rights reserved.') }}</label>
                <div class="footerIcons">
                    <a href="https://facebook.com/erik.rogansky" target="_blank" class="fa-brands fa-facebook-f"></a>
                    <a href="https://www.linkedin.com/in/erik-rogansk%C3%BD-9b75812a8/" target="_blank" class="fa-brands fa-linkedin-in"></a>
                    <a href="https://instagram.com/erik_rogansky" target="_blank" class="fa-brands fa-instagram"></a>
                    <a href="https://github.com/erikrogansky" target="_blank" class="fa-brands fa-github"></a>
                </div>
            </div>
            <div class="terms">
                <a href="#">{{ __('Terms and Conditions') }}</a>
                <a href="#">{{ __('Privacy Policy') }}</a>
            </div>
        </div>
    </footer>
</body>
</html>
