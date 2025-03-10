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

<!-- Contact Info Section -->
<div class="services">
    <h1> <br> </h1>
    <h1>Contact Information</h1>
    <div class="services__container">
        <div class="services__card">
            <h2 id="Text">Rime</h1>
            <p  id="Text">LinkedIn: www.linkedin.com/in/rime-nasser-eddine</p>
            <p  id="Text">GitHub: https://github.com/Rime6</p>
            <p  id="Text">Email: rnass026@uottawa.ca</p>
            <br>
            <img src="images/rime.jpg" alt="Logo" class="logo" style="width:265px; height:400px; margin-left: 5rem;"></img>
        </div>
        <div class="services__card">
            <h2 id="Text">Myriam</h2>
            <p  id="Text">LinkedIn: www.linkedin.com/in/myriam-labissière-177817330</p>
            <p  id="Text">GitHub: https://github.com/mlab10</p>
            <p  id="Text">Email: mlabi039@uottawa.ca</p>
            <br>
            <img src="images/myriam.jpg" alt="Logo" class="logo" style="width:275px; height:400px; margin-left: 5rem;"></img>
        </div>
    </div>
</div>

<!-- Footer Section -->
 <div class="footer__container">
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <br>
            <br>
            <br>
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
            <br>
            <br>
            <div class="footer__logo">
                <h4 id="footer__logo" style="color:white;"><img src="images/logo.png" alt="Logo" class="logo" width="18" height="18"></img>
                    AccessPath</h4>
            </div>
            <p id = "Text" class="website__right">© AccessPath 2020. All Rights reserved</p>
        </div>
    </div>

<script src="app.js?v=<?= filemtime('app.js'); ?>"></script>
</body>
</html>