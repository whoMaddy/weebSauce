<?php
    include 'includes/header.inc.php';
?>

    <div class="fullScreen">
        <div class="flexRow">
            <div class="flexCol fullHeight widthFifty" id="signUpBG">
                <div class="jumbotron jumbotronCurvBorder transparentColorSignUp purpleBorder signUpJumbo">
                    <h1>Sign Up</h1>
                    <h4>
                        Click here and sign up already if you still don't have a weebSauce account
                        and treat yourself.
                    </h4>
                    <hr>
                    <p>
                        You'll get additional benifits too, if you get lucky.
                    </p>
                </div>
            </div>
            <div class="flexCol fullHeight widthFifty" id="loginBG">
                <div class="jumbotron jumbotronCurvBorder transparentColorLogin redBorder loginJumbo">
                    <h1>Login</h1>
                    <h4>
                        Click to here if you already have a weebSauce account and while you're
                        at it, try upgrading your plan too.
                    </h4>
                    <hr>
                    <p>
                        If you refer to a friend, you'll get a chance to avail a 10% discount!
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="includes/getStarted.inc.js"></script>

    <?php
        if ((isset($_GET['order'])) && ($_GET['order'] == "login")) {
            echo '<script>alert("You are not logged in.")</script>';
        }
    ?>

<?php
    include 'includes/footer.inc.php';
?>