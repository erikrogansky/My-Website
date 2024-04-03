<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Erik Roganský, Roganský, Erik">
    <meta name="description" content="Coming soon!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="img/logo-tr.png">
    <link rel="preload" href="https://fonts.adobe.com/fonts/cofo-sans-variable" as="font" crossorigin="anonymous">
    <script src="scripts/script.js" defer></script>
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
                <img id="selectedLanguage" src="img/us.png" alt="ENG">
                <div class="dropdownContent">
                    <img src="img/sk.png" alt="SVK" onclick="changeLanguage('SVK')">
                    <img src="img/us.png" alt="ENG" onclick="changeLanguage('ENG')" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <button onclick="goToTop()" id="goToTopBtn" class="fa-solid fa-arrow-up"></button>

    <section class="intro" id="intro">
        <div class="introIcons">
            <a href="https://facebook.com/erik.rogansky" target="_blank" class="fa-brands fa-facebook-f" data-text="Facebook"></a>
            <a href="https://www.linkedin.com/in/erik-rogansk%C3%BD-9b75812a8/" target="_blank" class="fa-brands fa-linkedin-in" data-text="LinkedIn"></a>
            <a href="https://instagram.com/erik_rogansky" target="_blank" class="fa-brands fa-instagram" data-text="Instagram"></a>
            <a href="https://github.com/erikrogansky" target="_blank" class="fa-brands fa-github" data-text="GitHub"></a>
        </div>

        <div class="introText">
            <label class="colorful line-by-line">Hello, I am</label>
            <h1 class="line-by-line">Erik Roganský</h1>
            <hr class="line-by-line">
            <h2 class="line-by-line">Informatics Student / Freelance Translator</h2>
            <p class="line-by-line">I am an informatics student with a strong interest in <strong>web development</strong>, <strong>Java</strong>, and <strong>C++</strong>. Professionally, I am currently mostly involved in <strong>English-Slovak translation</strong> work.</p>
            <ul>
                <li class="line-by-line">Every single detail matters</li>
                <li class="line-by-line">Self-growth and improvement is crucial</li>
                <li class="line-by-line">Lorem ipsum dolor sit amet</li>
            </ul>
            <div class="introButtons line-by-line">
                <a href="cv/cv.pdf" download="cv" class="colorfulButton">Download CV</a>
                <button class="colorfulBorderButton"><span>Contact me</span></button>
            </div>
        </div>

        <div class="introPhoto">
            <div class="photoContainer">
                <img src="img/no-bcg-big.png" alt="Me">
            </div>
        </div>

        <div class="arrowDown">
            <i class="fa-solid fa-arrow-down-long"></i>
        </div>
    </section>

    <section class="services" id="services">
        <label class="colorful slide-up">Services</label>
        <h1 class="slide-up">What I am offering</h1>
        <div class="servicesContent">
            <div class="servicesItem">
                <img src="img/translate.png" alt="Translation service" class="slide-up">
                <label class="slide-up">Translation services</label>
                <label class="slide-up">I offer precise translations from English to Slovak for documents, websites, applications, and a wide array of content with meticulous attention to accuracy and quality.</label>
            </div>
            <div class="servicesItem">
                <i class="fa-solid fa-code slide-up"></i>
                <label class="slide-up">Web development</label>
                <label class="slide-up">With expertise in frontend and backend development, I create websites that are visually appealing and functional, focusing on user experience to leave a positive impression.</label>
            </div>
            <div class="servicesItem">
                <img src="img/cpp_java.png" alt="Translation service" class="slide-up">
                <label class="slide-up">Software development</label>
                <label class="slide-up">I provide comprehensive software development services in Java and C++, ensuring tailored solutions for applications and systems to meet specific needs and standards.</label>
            </div>
        </div>
        <div class="servicesContentAdd">
            <div class="servicesItem">
                <i class="fa-solid fa-question slide-up"></i>
                <label class="slide-up">Didn't find what you need?</label>
                <label class="slide-up">If the service you’re looking for is not listed, contact me! If I have the necessary skills, I am sure we can find a solution.</label>
            </div>
        </div>
    </section>

    
    <section class="education" id="education">
        <label class="colorful slide-up">Education</label>
        <h1 class="slide-up">My studies</h1>
        <div class="educationContent">
            <div class="educationItem slide-up">
                <label>Faculty of Informatics and Information Technologies<br>Slovak University of Technology in Bratislava</label>
                <label>Bachelor of Informatics</label>
                <label>2022 - present</label>
                <a href="https://www.fiit.stuba.sk/" target="_blank" class="fa-solid fa-link"></a>
            </div>
            <hr class="slide-up">
            <div class="educationItem slide-up">
                <label>Gymnázium Ľudovíta Štúra Zvolen</label>
                <label>High school diploma</label>
                <label>2018 - 2022</label>
                <a href="https://gymzv.sk" target="_blank" class="fa-solid fa-link"></a>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <label class="colorful slide-up">Skills</label>
        <h1  class="slide-up">What I am skilled at</h1>
        <div class="skillsContent">
            <img src="img/html.png" alt="HTML" class="slide-up">
            <img src="img/css.png" alt="CSS" class="slide-up">
            <img src="img/js.png" alt="JS" class="slide-up">
            <img src="img/php.png" alt="PHP" class="slide-up">
            <img src="img/figma.png" alt="Figma" class="slide-up">
            <img src="img/laravel.png" alt="Laravel" class="slide-up">
            <img src="img/cpp.png" alt="C++" class="slide-up">
            <img src="img/java.png" alt="Java" class="slide-up">
            <img src="img/postgre.png" alt="PostgreSQL" class="slide-up">
            <img src="img/linux.png" alt="Linux" class="slide-up">
            <img src="img/phrase.png" alt="Phrase" class="slide-up">
            <img src="img/office.png" alt="Office" class="slide-up">
        </div>
    </section>

    <section class="languages" id="languages">
        <label class="colorful slide-up">Languages</label>
        <h1 class="slide-up">Languages I speak</h1>
        <div class="languagesContent">
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart1"></div>
                <label class="slide-up">English</label>
                <label class="slide-up">Professional working proficiency</label>
            </div>
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart2"></div>
                <label class="slide-up">Slovak</label>
                <label class="slide-up">Native proficiency</label>
            </div>
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart3"></div>
                <label class="slide-up">Czech</label>
                <label class="slide-up">Full professional proficiency</label>
            </div>
        </div>
        <h2 class="slide-up">Additional languages</h2>
        <div class="languagesContentAdd"">
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart4"></div>
                <label class="slide-up">French</label>
                <label class="slide-up">Limited working profficiency </label>
            </div>
            <div class="languageItem">
                <div class="chart-container slide-up" id="chart5"></div>
                <label class="slide-up">Spanish</label>
                <label class="slide-up">Elementary proficiency</label>
                <label class="slide-up">(currently learning)</label>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
        <label class="colorful slide-up">Experience</label>
        <h1 class="slide-up">My journey so far...</h1>
        <div class="experienceContent">
            <div class="experienceItem">
                <label class="slide-up">Translator (English to Slovak)</label>
                <label class="slide-up">Self-employed</label>
                <label class="slide-up">2023 - present</label>
                <ul>
                    <li class="slide-up">Skilled in translating predominantly IT products with additional experience across diverse fields</li>
                    <li class="slide-up">Collaborating with a team of translators to complete large projects efficiently and within deadlines</li>
                    <li class="slide-up">Using various online tools (CAT) and dictionaries to research and verify technical terms and expressions</li>
                    <li class="slide-up">Editing and proofreading translations to ensure clarity, accuracy, and coherence</li>
                </ul>
            </div>

            <div class="experienceItem">
                <label class="slide-up">Artificial intelligence prompt analyst</label>
                <label class="slide-up">Self-employed</label>
                <label class="slide-up">2023 - present</label>
                <ul>
                    <li class="slide-up">Extensive experience in text analysis and comparative assessment</li>
                    <li class="slide-up">Comparing and evaluating the outputs of different prompts for various generative AI tasks, such as text summarization, sentiment analysis, and content creation</li>
                    <li class="slide-up">Identifying and reporting the strengths and weaknesses of different prompts, as well as the potential ethical, cultural, and social implications of the generated outputs</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <label class="colorful slide-up">Contact</label>
        <h1 class="slide-up">Contact me</h1>
        <div class="contactContent">
            <div class="contactText">
                <p class="slide-up">If you wish to contact me, below you'll find multiple ways to get in touch with me.</p>
                <label class="slide-up">Contact Details:</label>
                <div class="contactTextDetails">
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-at"></i><label><strong>Email: </strong>roganskyerik@gmail.com</label></div>
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-phone"></i><label><strong>Phone: </strong>+421 903 022 263</label></div>
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-location-dot"></i><label><strong>Address: </strong>I. Krasku 43, 963 01 Krupina, Slovak republic</label></div>
                </div>
                <p class="slide-up">Feel free to drop me an email or give me a call if you have any questions, inquiries, or would like to discuss potential collaborations.</p>
                <p class="slide-up">Alternatively, you can use the form on the right to send me a message directly through the website. Simply fill in your details.</p>
                <p class="slide-up">If you have any technical problems with or questions regarding the website, please don't hesitate to contact me using the email below:</p>
                <div class="contactTextTech">
                    <div class="contactDetailsElement slide-up"><i class="fa-solid fa-wrench"></i><label><strong>Tech support: </strong>admin@roganskyerik.com</label></div>
                </div>
                <p class="slide-up">Looking forward to hearing from you!</p>
            </div>

            <div class="contactForm">
                <form>
                    <input type="text" placeholder="Name" class="basicInput slide-up" required>
                    <input type="text" placeholder="Email" class="basicInput slide-up" required>
                    <input type="text" placeholder="Phone number (optional)" class="basicInput slide-up">
                    <input type="text" placeholder="Subject" class="basicInput slide-up" required>
                    <textarea placeholder="Message" class="basicInput slide-up" required></textarea>
                    <button class="colorfulButton slide-up">Send message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footerContainer">
            <div class="copyright">
                <label>Made with ❤️ by Erik Roganský</label>
                <label>© Erik Roganský 2024. All rights reserved.</label>
                <div class="footerIcons">
                    <a href="https://facebook.com/erik.rogansky" target="_blank" class="fa-brands fa-facebook-f"></a>
                    <a href="https://www.linkedin.com/in/erik-rogansk%C3%BD-9b75812a8/" target="_blank" class="fa-brands fa-linkedin-in"></a>
                    <a href="https://instagram.com/erik_rogansky" target="_blank" class="fa-brands fa-instagram"></a>
                    <a href="https://github.com/erikrogansky" target="_blank" class="fa-brands fa-github"></a>
                </div>
            </div>
            <div class="terms">
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>
</body>
</html>