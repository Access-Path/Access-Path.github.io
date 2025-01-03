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
                    <a href="aboutus.php" class="navbar__links">About us</a>
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
                <h1>ABOUT US</h1>
                <h2>Our Team</h2>
                <p>Accesibility for all.</p>
            </div>
            <div class="main_img--container">
                <img src="images/pic3.svg" alt="Picture" id="main__img" style="width:50rem;height:33rem;">
            </div>
        </div>
    </div>

<!-- Services Section -->
<div class="services" id="about__us">
    <h1>Creators</h1>
    <div class="services__container">
        <div class="services__card">
            <div class="services__card" id="about">
                <h2 id="Text">Rime Nasser Eddine</h2>
                <p id="Text">Rime Nasser Eddine is a dedicated Software Engineering student at the University of Ottawa with a background in both technical skills and leadership. Fluent in three languages (French, English, and Arabic), Rime combines a passion for real-world problem-solving with hands-on experience, from leading teams as a certified lifeguard to creating environmental impact projects showcased online. Her technical toolkit includes Python, HTML, CSS, JavaScript, and Git. Rime’s innovative spirit shines through in projects like YouTube offline downloaders and website automators, which you can find in her github profile (check the Contact us page), exemplifying a strong drive to build solutions that matter.</p>
            </div>
            <button class="other__buttons"><a href="contact.php">Contact Information</a></button>
            <br>
            <img src="images/rime2.jpg" alt="Logo" class="logo" style="width:400px; height:400px; margin-left: 6rem;"></img>
        </div>
        <div class="services__card">
            <div class="services__card" id="about">
                <h2 id="Text">Myriam Labissière</h2>
                <p id="Text">Myriam Labissière is a dedicated first-year Software Engineering student at the University of Ottawa, bringing a strong foundation in programming, problem-solving, and teamwork. As a bilingual communicator in English and French, Myriam is proficient in Python, HTML and CSS. Known for her collaborative spirit and attention to detail, she combines technical expertise with a passion for impactful solutions. She oversees all things design and styling on our website. In her free time, she enjoys reading and taking walks.</p>
            </div>
            <button class="other__buttons"><a href="contact.php">Contact Information</a></button>
            <br>
            <img src="images/myriam2.jpg" alt="Logo" class="logo" style="width:225px; height:400px; margin-left: 12rem;"></img>
        </div>
    </div>
</div>

<!-- Footer Section -->
 <div class="footer__container">
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2 id="Text">Contact us</h2>
                <a href="contact.php">LinkedIn</a>
                <a href="contact.php">GitHub</a>
                <a href="contact.php">Email</a>
            </div>
            <div class="social__icons">
                </a>
                <a href="contact.php" class="social__icons" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="contact.php" class="social__icons" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="contact.php" class="social__icons" target="_blank">
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

<script src="app.js?v=<?= filemtime('app.js'); ?>"></script>
</body>
</html>
