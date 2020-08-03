<?php
    session_start();
    $_SESSION['user_email'] = 'admin@email.com';
    include 'includes/header.inc.php';
?>

    <div class="fullScreen" id="headerBG">
        <div class="flexCol fullHeight">
            <div class="jumbotron jumbotronCurvBorder transparentColor warningBorder">
                <h1>weebSauce</h1>
                <h4>We deliver dreams to your door step.</h4>
                <hr>
                <p>
                    We just launched THE VETERAN Mystery Box this month which includes a 
                    bunch of new stuff. Follow this link to grab one for youself.
                </p>
                <br>
                <a href="veteranMysteryBox.php" class="jumboBtn warning button">Learn More</a>
            </div>
            <div class="jumboFoot transparentColor">
                <p class="jumboFootP">>></p>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="servicesPart">
        <div class="flexCol fullHeight">
            <div class="jumbotron jumbotronCurvBorder transparentColor pinkBorder">
                <h1>Mystery Box</h1>
                <h4>Go check out our exclusive range of services for different types of mystery
                    box with contents including anime goodies from small figuriens, 
                    wearables, hoodies, to even heavenly pillows.
                </h4>
                <a href="services.php" class="jumboBtn pink button">Services</a>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="directorsPart">
        <div class="flexCol fullHeight">
            <div class="jumbotron jumbotronCurvBorder transparentColor brownBorder">
                <h1>Our Directors</h1>
                <h4>Take a look at the people who not only thought about this project
                    but also gave it a life. Also, they are the ones behind the "quirky"
                    nature of this website.
                </h4>
                <p>
                    P.S. - Their IG's links are also present, so you can go follow them
                    there.
                </p>
                <br>
                <a href="directors.php" class="jumboBtn directorsLink brownish button">Directors</a>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="aboutPart">
        <div class="flexCol fullHeight">
            <div class="jumbotron jumbotronCurvBorder transparentColor redBorder">
                <h1>About Us</h1>
                <h4>First, we weren't particularly thinking of this kind of stuff. We
                    were more insterested in finding new ways to get people to watch
                    anime and promote it. Sometimes, due to strict budget 
                    constrainments, anime/ manga fail to even launch and are...
                </h4>
                <p>
                    Interested in knowing the full story?! No problem.<br>
                    Follow this link to know more about us.
                </p>
                <br>
                <a href="about.php" class="jumboBtn danger button">About Us</a>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="contactPart">
        <div class="flexCol fullHeight">
            <div class="jumbotron jumbotronCurvBorder transparentColor purpleBorder">
                <h1>Contact Us</h1>
                <h4>If you have any query regarding our services, or even want to 
                    complain about something, feel free to contact us via this form 
                    and we will make sure to help you out.
                </h4>
                <p>
                    P.S. - Suggestions are welcomed too.
                </p>
                <br>
                <a href="contact.php" class="jumboBtn purpleish button">Contact</a>
            </div>
        </div>
    </div>

    <?php
        if ((isset($_GET['query'])) && ($_GET['query'] == "notAdmin")) {
            echo '<script>alert("Please login with admin credentials.")</script>';
        } else if ((isset($_GET['pwdChange'])) && ($_GET['pwdChange'] == "success")) {
            echo '<script>alert("Password changed successfully.")</script>';
        }
    ?>

<?php
    include 'includes/footer.inc.php';
?>