<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPath</title>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" >
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <br>
            <br>
            <br>
            <p id="navbar__logo"><img src="images/logo.png" alt="Logo" class="logo" width="50" height="50"></img>AccessPath</p>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>   
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="home.php" class="navbar__links" id="link">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="aboutus.php" class="navbar__links" id="link">About us</a>
                </li>
                <li class="navbar__item">
                    <a href="contact.php" class="navbar__links" id="link">Contact us</a>
                </li>
                <li class="navbar__btn">
                    <a href="report.php" class="button">Report Accessibility Issue</a>
                </li>
            </ul>     
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <br>
                <br>
                <h1>MAKE OUR ROADS ACCESSIBLE</h1>
                <h2>COMMUNITY INVOLVEMENT</h2>
                <p>See a problem? Report the problem.</p>
                <button class="main__btn"><a href="report.php">Get Started</a></button>
            </div>
            <div class="main_img--container">
                <img src="images/pic1.svg" alt="Picture" id="main__img" style="margin-top: 5rem;">
            </div>
        </div>
    </div>

<!-- Services Section -->
<div class="services">
    <br>
    <br>
    <h1>See how it works</h1>
    <div class="services__container">
        <div class="services__card__index">
            <h2 id="Text">Report Accessibility Issues</h2>
            <p  id="Text">Help our community</p>
            <button class="other__buttons"><a href="report.php">Report</a></button>
        </div>
        <div class="services__card__index">
            <h2 id="Text">Learn more about us</h2>
            <p id="Text">Accessibility for all</p>
            <button class="other__buttons"><a href="aboutus.php">Learn more</a></button>
        </div>
        <div class="services__card__index">
            <h2 id="Text">Contact us</h2>
            <p  id="Text">Ask us anything</p>
            <button class="other__buttons"><a href="contact.php">Contact Information</a></button>
        </div>
        <div class="services__card2">
            <h2 id="Text">Importance of Accessibility</h2>
            <p id="Text">Accessibility is essential for creating inclusive communities where everyone, regardless of physical ability, can navigate and participate fully in public life. AccessPath, empowers people to report sidewalk accessibility issues, such as broken pathways, uneven surfaces, or blocked routes. By crowdsourcing this information, AccessPath helps municipalities identify and prioritize critical repairs, creating safer and more accessible sidewalks for everyone, including those with mobility challenges. This proactive approach not only fosters inclusivity but also promotes civic engagement by allowing residents to directly contribute to making their city more accessible and welcoming for all.</p>
        </div>
    </div>
</div>

<!-- Footer Section -->
<div class="footer__container">
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2 id="Text">Contact us</h2>
                <a href="contact.php" id="link">LinkedIn</a>
                <a href="contact.php" id="link">GitHub</a>
                <a href="contact.php" id="link">Email</a>
            </div>
            <div class="social__icons">
                <a href="contact.php" class="social__icons" id="link" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="contact.php" class="social__icons" id="link" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="contact.php" class="social__icons" id="link" target="_blank">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="social__media">
        <div class="social__media--wrap">
            <div class="footer__logo">
                <h4 id="footer__logo" style="color:white;"><img src="images/logo.png" alt="Logo" class="logo" width="15" height="15"></img>
                    AccessPath</h4>
            </div>
            <p id = "Text" class="website__right">© AccessPath 2020. All Rights reserved</p>
        </div>
    </div>
</div>
    <script src="app.js?v=<?= filemtime('app.js'); ?>"></script>
</body>
</html>