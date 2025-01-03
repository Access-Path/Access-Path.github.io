<?php
// Include database connection
$hostname = "sql202.infinityfree.com";
$username = "if0_38011613";
$password = "FlameKatana6";
$db_name = "if0_38011613_accessibility_reports";
$conn = new mysqli($hostname, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $street_name = $conn->real_escape_string($_POST['street']);
    $area_name = $conn->real_escape_string($_POST['area']);
    $type_text = $conn->real_escape_string($_POST['issue-type']);
    $description_text = $conn->real_escape_string($_POST['description']);

    // Insert data into database
    $sql = "INSERT INTO Reports (Streets, Areas, Types, Descriptions) VALUES ('$street_name', '$area_name', '$type_text', '$description_text')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to the same page after submission
        header("Location: /report.php"); // This will refresh the page to show the updated reports
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch reports
$sql = "SELECT Streets, Areas, Types, Descriptions FROM Reports ORDER BY id DESC";
$result = $conn->query($sql);
?>
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
        <div class="main__container" id="report_page">
            <div class="main__content" id="report_page">
                <br>
                <br>
                <br>
                <h1>REPORT ACCESSIBILITY ISSUE</h1>
                <h2>HELP OUR COMMUNITY</h2>
                <p>See a problem? Report the problem.</p>
                <button class="main__btn" id="scroll__button"><a>Report</a></button>
            </div>
            <div class="map_img--container">
                <br>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d359537.0372323226!2d-75.8002569!3d45.25015655000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05b25f5113af%3A0x8a6a51e131dd15ed!2sOttawa%2C%20ON!5e0!3m2!1sen!2sca!4v1729269439835!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

<!-- Services Section -->
<div class="services" id="services">
    <br>
    <br>
    <br>
    <br>

    <h1>Issue Report Form</h1>
    <form id="issueForm" action="/report.php" method="POST">
        <div class="form-group">
            <label for="street" id="Text">Street Name:</label>
            <input type="text" class="input" id="street" name="street" required>
        </div>
        <br>
        <div class="form-group">
            <label for="area" id="Text">Area on the Street:</label>
            <input type="text" class="input" id="area" name="area" required>
        </div>
        <br>
        <div class="form-group">
            <label for="issue-type" id="Text">Type of Issue:</label>
            <input type="text" class="input" id="issue-type" name="issue-type" required>
        </div>
        <br>
        <div class="form-group">
            <label for="description" id="Text">Description:</label>
            <textarea class="input" id="description" name="description" required></textarea>
        </div>
        <br>
        <div>
            <button type="submit" class="submit__btn">Submit</button>
        </div>
    </form>
</div>
<div class="services" id="Title">    
    <h1>Reports</h1>
</div>
<div class="services" id="services">
    <input type="text" id="searchBar" placeholder="Search streets...">
    <div id="reportContainer">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='report-item' id='Text'>";
                echo "<h3><strong>Report: </strong></h3>";
                echo "<p><strong>Street: </strong>" . htmlspecialchars($row['Streets']) . "</p>";
                echo "<p><strong>Area: </strong>" .  htmlspecialchars($row['Areas']) . "</p>";
                echo "<p><strong>Type: </strong>" . htmlspecialchars($row['Types']) . "</p>";
                echo "<p><strong>Description: </strong>" . htmlspecialchars($row['Descriptions']) . "</p><br>";
                echo "</div>";
            }
        } else {
            echo "No reports found.";
        }
        ?>
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
</div>
    <script src="app.js?v=<?= filemtime('app.js'); ?>"></script>
</body>
</html>
  