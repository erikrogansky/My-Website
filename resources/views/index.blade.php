<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Erik Roganský, Roganský, Erik">
    <meta name="description" content="{{ __('Informatics student with a passion for learning and growth, skilled in web and software development as well as translation work.') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name='author' content='Erik Roganský, roganskyerik@gmail.com'>
    <meta name="google-site-verification" content="-fH-o9fmZnq5NLOP63n2X1sTgt3zMJxmoqezZzFcGKU" />
    <link rel="canonical" href="https://roganskyerik.com/" />
    <link rel="alternate" hreflang="en" href="https://roganskyerik.com/" />
    @foreach(config('app.available_locales') as $locale => $language)
    <link rel="alternate" hreflang="{{ $language }}" href="{{ url()->current() }}/lang/{{ $language }}">
    @endforeach
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" href="/img/logo-tr.png">
    <link rel="preload" href="https://fonts.adobe.com/fonts/cofo-sans-variable" as="font" crossorigin="anonymous">
    <script src="/scripts/script.js" defer></script>
    <script src="https://kit.fontawesome.com/ac7b36a7a6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Erik Roganský</title>
    <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "Erik Roganský | Official Website",
      "url" : "https://roganskyerik.com/"
    }
  </script>
</head>
<body>
    <header>
        <div class="headerContainer" id="header">
            <div><button id="mobileNavbar" class="mobileNavbar fa-solid fa-bars" onclick="document.getElementById('navPane').style.left = '0';"></button></div>
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
                <img id="selectedLanguage" src="{{ __('/img/us.png') }}" alt="{{ __('ENG') }}">
                <div class="dropdownContent">
                    <img src="{{ __('/img/sk.png') }}" alt="{{ __('SVK') }}" onclick="location.href = '{{ route('langSwitch', __('sk')) }}';">
                    <img src="{{ __('/img/us.png') }}" alt="{{ __('ENG') }}" onclick="changeLanguage('ENG')" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <div id="navPane">
        <button class="closeButton fa-solid fa-xmark" onclick="document.getElementById('navPane').style.left = '-300px';"></button>
        <a href="#intro" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Home') }}</a>
        <a href="#services" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Services') }}</a>
        <a href="#education" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Education') }}</a>
        <a href="#skills" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Skills') }}</a>
        <a href="#languages" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Languages') }}</a>
        <a href="#experience" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Experience') }}</a>
        <a href="#contact" onclick="document.getElementById('navPane').style.left = '-300px';">{{ __('Contact') }}</a>
        <div class="navIcons">
            <a href="https://facebook.com/erik.rogansky" target="_blank" class="fa-brands fa-facebook-f" data-text="Facebook"></a>
            <a href="https://www.linkedin.com/in/erikrogansky/" target="_blank" class="fa-brands fa-linkedin-in" data-text="LinkedIn"></a>
            <a href="https://instagram.com/erik_rogansky" target="_blank" class="fa-brands fa-instagram" data-text="Instagram"></a>
            <a href="https://github.com/erikrogansky" target="_blank" class="fa-brands fa-github" data-text="GitHub"></a>
        </div>
    </div>


    @if (session('successMessage'))
    <div id="overlay" class="overlay"></div>
    <div id="successPopup" class="successPopup">
        <h2>{{ session('successMessage') }}</h2>
        <p>This popup will close in <span id="countdown">5</span> seconds.</p>
    </div>
    <script>
    var countdownElement = document.getElementById('countdown');
    var countdown = 5;

    var countdownInterval = setInterval(function() {
        countdown--;
        countdownElement.textContent = countdown;
        if (countdown <= 0) {
            clearInterval(countdownInterval);
            fadeOut('successPopup');
            fadeOut('overlay');
        }
    }, 1000);

    function fadeOut(elementId) {
        var element = document.getElementById(elementId);
        var opacity = 1;
        var interval = setInterval(function() {
            if (opacity <= 0) {
                clearInterval(interval);
                element.style.display = 'none';
            } else {
                element.style.opacity = opacity;
                opacity -= 0.01;
            }
        }, 1);
    }
    </script>
    @endif

    <button onclick="goToTop()" id="goToTopBtn" class="fa-solid fa-arrow-up"></button>

    <section class="intro" id="intro">
        <div class="introIcons">
            <a href="https://facebook.com/erik.rogansky" target="_blank" class="fa-brands fa-facebook-f" data-text="Facebook"></a>
            <a href="https://www.linkedin.com/in/erikrogansky/" target="_blank" class="fa-brands fa-linkedin-in" data-text="LinkedIn"></a>
            <a href="https://instagram.com/erik_rogansky" target="_blank" class="fa-brands fa-instagram" data-text="Instagram"></a>
            <a href="https://github.com/erikrogansky" target="_blank" class="fa-brands fa-github" data-text="GitHub"></a>
        </div>

        <div class="introText">
            <label class="colorful line-by-line">{{ __('Hello, I am') }}</label>
            <h1 class="line-by-line">Erik Roganský</h1>
            <hr class="line-by-line">
            <h2 class="line-by-line">{{ __('UX Researcher / Freelance Translator') }}</h2>
            <p class="line-by-line">{{ __('I am an informatics student with a strong interest in ') }}<strong>{{ __('web development,') }}</strong> <strong>{{ __('Java,') }}</strong> {{ __('and') }} <strong>C++</strong>. {{ __('Professionally, I am currently mostly involved in') }} <strong>{{ __('English-Slovak translation') }}</strong>{{ __(' work.') }}</p>
            <ul>
                <li class="line-by-line">{{ __('Every single detail matters') }}</li>
                <li class="line-by-line">{{ __('Self-growth and improvement is crucial') }}</li>
                <li class="line-by-line">{{ __('Consistency and discipline are vital') }}</li>
            </ul>
            <div class="introButtons line-by-line">
                <a href="cv/cv.pdf" download="cv" class="colorfulButton">{{ __('Download CV') }}</a>
                <button onclick="location.href = '#contact';" class="colorfulBorderButton"><span>{{ __('Contact me') }}</span></button>
            </div>
        </div>

        <div class="introPhoto">
            <div class="photoContainer">
                <img src="/img/no-bcg-big.png" alt="Me">
            </div>
        </div>

        <div class="arrowDown">
            <i class="fa-solid fa-arrow-down-long"></i>
        </div>
    </section>

    <section class="services" id="services">
        <label class="colorful slide-up">{{ __('Services') }}</label>
        <h1 class="slide-up">{{ __('What I am offering') }}</h1>
        <div class="servicesContent">
            <div class="servicesItem">
                <img src="/img/translate.png" alt="Translation service" class="slide-up">
                <label class="slide-up">{{ __('Translation services') }}</label>
                <label class="slide-up">{{ __('I offer precise translations between English and Slovak for documents, websites, applications, and a wide array of content with meticulous attention to accuracy and quality.') }}</label>
            </div>
            <div class="servicesItem">
                <i class="fa-solid fa-code slide-up"></i>
                <label class="slide-up">{{ __('Web development') }}</label>
                <label class="slide-up">{{ __('With expertise in frontend and backend development, I create websites that are visually appealing and functional, focusing on user experience to leave a positive impression.') }}</label>
            </div>
            <div class="servicesItem">
                <img src="/img/cpp_java.png" alt="Translation service" class="slide-up">
                <label class="slide-up">{{ __('Software development') }}</label>
                <label class="slide-up">{{ __('I provide comprehensive software development services in Java and C++, ensuring tailored solutions for applications and systems to meet specific needs and standards.') }}</label>
            </div>
            <div class="servicesItem center">
                <i class="fa-solid fa-question slide-up"></i>
                <label class="slide-up">{{ __('Didn’t find what you need?') }}</label>
                <label class="slide-up">{{ __('If the service you’re looking for is not listed, contact me! If I have the necessary skills, I am sure we can find a solution.') }}</label>
            </div>
        </div>
    </section>

    
    <section class="education" id="education">
        <label class="colorful slide-up">{{ __('Education') }}</label>
        <h1 class="slide-up">{{ __('My studies') }}</h1>
        <div class="educationContent">
            <div class="educationItem slide-up">
                <label id="longSchool">{{ __('Faculty of Informatics and Information Technologies') }}<br>{{ __('Slovak University of Technology in Bratislava') }}</label>
                <label id="shortSchool">{{ __('FIIT STU in Bratislava') }}</label>
                <label>{{ __('Bachelor of Informatics') }}</label>
                <label>{{ __('2022 - present') }}</label>
                <a href="https://www.fiit.stuba.sk/" target="_blank" class="fa-solid fa-link"></a>
            </div>
            <hr class="slide-up">
            <div class="educationItem slide-up">
                <label>Gymnázium Ľudovíta Štúra Zvolen</label>
                <label>{{ __('High school diploma') }}</label>
                <label>2018 - 2022</label>
                <a href="https://gymzv.sk" target="_blank" class="fa-solid fa-link"></a>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <label class="colorful slide-up">{{ __('Skills') }}</label>
        <h1  class="slide-up">{{ __('What I am skilled at') }}</h1>
        <div class="skillsContent">
            <img src="/img/html.png" alt="HTML" class="slide-up">
            <img src="/img/css.png" alt="CSS" class="slide-up">
            <img src="/img/js.png" alt="JS" class="slide-up">
            <img src="/img/php.png" alt="PHP" class="slide-up">
            <img src="/img/figma.png" alt="Figma" class="slide-up">
            <img src="/img/laravel.png" alt="Laravel" class="slide-up">
            <img src="/img/cpp.png" alt="C++" class="slide-up">
            <img src="/img/java.png" alt="Java" class="slide-up">
            <img src="/img/postgre.png" alt="PostgreSQL" class="slide-up">
            <img src="/img/linux.png" alt="Linux" class="slide-up">
            <img src="/img/phrase.png" alt="Phrase" class="slide-up">
            <img src="/img/office.png" alt="Office" class="slide-up">
        </div>
    </section>

    <section class="languages" id="languages">
        <label class="colorful slide-up">{{ __('Languages') }}</label>
        <h1 class="slide-up">{{ __('Languages I speak') }}</h1>
        <div class="languagesContent">
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart1"></div>
                <label class="slide-up">{{ __('English') }}</label>
                <label class="slide-up">{{ __('Professional working proficiency') }}</label>
                <label class="slide-up">{{ __('(passed national exam C1-C2)') }}</label>
            </div>
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart2"></div>
                <label class="slide-up">{{ __('Slovak') }}</label>
                <label class="slide-up">{{ __('Native proficiency') }}</label>
            </div>
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart3"></div>
                <label class="slide-up">{{ __('Czech') }}</label>
                <label class="slide-up">{{ __('Full professional proficiency') }}</label>
            </div>
        </div>
        <h2 class="slide-up">{{ __('Additional languages') }}</h2>
        <div class="languagesContentAdd">
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart4"></div>
                <label class="slide-up">{{ __('French') }}</label>
                <label class="slide-up">{{ __('Limited working profficiency') }}</label>
            </div>
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart5"></div>
                <label class="slide-up">{{ __('Spanish') }}</label>
                <label class="slide-up">{{ __('Elementary proficiency') }}</label>
                <label class="slide-up">{{ __('(currently learning)') }}</label>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
        <label class="colorful slide-up">{{ __('Experience') }}</label>
        <h1 class="slide-up">{{ __('My journey so far...') }}</h1>
        <div class="experienceContent">
            <div class="experienceItem">
                <label class="slide-up">{{ __('Translator (English to Slovak)') }}</label>
                <label class="slide-up">{{ __('Self-employed') }}</label>
                <label class="slide-up">{{ __('Aug 2023 - present') }}</label>
                <ul>
                    <li class="slide-up">{{ __('Skilled in translating predominantly IT products with additional experience across diverse fields') }}</li>
                    <li class="slide-up">{{ __('Collaborating with a team of translators to complete large projects efficiently and within deadlines') }}</li>
                    <li class="slide-up">{{ __('Using various online tools (CAT) and dictionaries to research and verify technical terms and expressions') }}</li>
                    <li class="slide-up">{{ __('Editing and proofreading translations to ensure clarity, accuracy, and coherence') }}</li>
                </ul>
            </div>

            <div class="experienceItem">
                <label class="slide-up">{{ __('Artificial intelligence prompt analyst') }}</label>
                <label class="slide-up">{{ __('Self-employed') }}</label>
                <label class="slide-up">{{ __('Jul 2023 - present') }}</label>
                <ul>
                    <li class="slide-up">{{ __('Extensive experience in text analysis and comparative assessment') }}</li>
                    <li class="slide-up">{{ __('Comparing and evaluating the outputs of different prompts for various generative AI tasks, such as text summarization, sentiment analysis, and content creation') }}</li>
                    <li class="slide-up">{{ __('Identifying and reporting the strengths and weaknesses of different prompts, as well as the potential ethical, cultural, and social implications of the generated outputs') }}</li>
                </ul>
            </div>

            <div class="experienceItem center">
                <label class="slide-up">{{ __('UX Researcher') }}</label>
                <label class="slide-up">{{ __('UXtweak (Self-employed)') }}</label>
                <label class="slide-up">{{ __('Jun 2024 - present') }}</label>
                <ul>
                    <li class="slide-up">{{ __('Designing and iterating on mockups to enhance user experience and interface design') }}</li>
                    <li class="slide-up">{{ __('Collaborating closely with the UX team to integrate user feedback and usability findings into design iterations') }}</li>
                    <li class="slide-up">{{ __('Analyzing current app features and proposing new functionalities based on industry trends and user needs') }}</li>
                    <li class="slide-up">{{ __('Utilizing knowledge of UX principles to ensure designs are intuitive, accessible, and aligned with company goals') }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <label class="colorful slide-up">{{ __('Contact') }}</label>
        <h1 class="slide-up">{{ __('Contact me') }}</h1>
        <div class="contactContent">
            <div class="contactText">
                <p class="slide-up">{{ __('If you wish to contact me, below you’ll find multiple ways to get in touch with me.') }}</p>
                <label class="slide-up">{{ __('Contact Details:') }}</label>
                <div class="contactTextDetails">
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-at"></i><label><strong>Email: </strong>roganskyerik@gmail.com</label></div>
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-phone"></i><label><strong>{{ __('Phone') }}: </strong>+421 903 022 263</label></div>
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-location-dot"></i><label><strong>{{ __('Address') }}: </strong>I. Krasku 43, 963 01 Krupina, {{ __('Slovak republic') }}</label></div>
                </div>
                <p class="slide-up">{{ __('Feel free to drop me an email or give me a call if you have any questions, inquiries, or would like to discuss potential collaborations.') }}</p>
                <p class="slide-up">{{ __('Alternatively, you can use the form on the right to send me a message directly through the website. Simply fill in your details.') }}</p>
                <p class="slide-up">{{ __('If you have any technical problems with or questions regarding the website, please don’t hesitate to contact me using the email below:') }}</p>
                <div class="contactTextTech">
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-wrench"></i><label><strong>{{ __('Tech support:') }} </strong>admin@roganskyerik.com</label></div>
                </div>
                <p class="slide-up">{{ __('Looking forward to hearing from you!') }}</p>
            </div>

            <div class="contactForm">
                <form id="contactForm" action="{{ route('send_mail') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="text" placeholder="{{ __('Name') }}" class="basicInput slide-up" name="name" required>
                    <input type="text" placeholder="Email" class="basicInput slide-up" name="email" required>
                    <input type="text" placeholder="{{ __('Phone number (optional)') }}" class="basicInput slide-up" name="phone">
                    <input type="text" placeholder="{{ __('Subject') }}" class="basicInput slide-up" name="subject" required>
                    <textarea placeholder="{{ __('Message') }}" class="basicInput slide-up" name="message" required></textarea>
                    <button id="submitButton" class="colorfulButton slide-up">{{ __('Send message') }}</button>
                </form>
            </div>
        </div>
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
