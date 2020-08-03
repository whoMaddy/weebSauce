<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weebSauce - Home</title>
    <link rel="stylesheet" href="..\public\css\index.css">
    <link rel="stylesheet" href="..\public\css\services.css">
    <link rel="stylesheet" href="..\public\css\product.css">
    <link rel="stylesheet" href="..\public\css\directors.css">
    <link rel="stylesheet" href="..\public\css\about.css">
    <link rel="stylesheet" href="..\public\css\contact.css">
    <link rel="stylesheet" href="..\public\css\getStarted.css">
    <link rel="stylesheet" href="..\public\css\admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar transparentColor">
        <a href="index.php" class="logo active">weebSauce</a>
        <ul class="navItems">
            <li><a href="index.php" class="active" id="homeNav">Home</a></li>
            <li><a href="services.php" id="servicesNav">Services</a></li>
            <li><a href="directors.php" id="directorsNav">Directors</a></li>
            <li><a href="about.php" id="aboutNav">About</a></li>
            <li><a href="contact.php" id="contactNav">Contact</a></li>
            <li>
                <?php
                    if(isset($_SESSION['user_email'])) {
                        echo '
                            <a href="myProfile.php" class="login active warning" id="editNav">My Profile</a>
                            <a href="includes/logout.inc.php" class="login active danger" id="logout">Logout</a>
                            <a href="getStarted.php" class="login hidden active warning" id="gsNav">Get Started</a>
                        ';
                        if ($_SESSION['user_email'] == "admin@email.com") {
                            echo '<a href="admin.php" class="login active warning" id="gsNav">Admin</a>';
                        }
                    } else {
                        echo '
                            <a href="myProfile.php" class="login hidden active warning" id="editNav">My Profile</a>
                            <a href="getStarted.php" class="login active warning" id="gsNav">Get Started</a>
                            <a href="admin.php" class="login active warning hidden" id="gsNav">Admin</a>
                            <a href="includes/logout.inc.php" class="login active danger hidden" id="logout">Logout</a>
                        ';
                    }
                ?>
            </li>
        </ul>
    </div>
