<?php
    include 'includes/header.inc.php';
?>

<div class="fullScreen" id="loginPage">
        <div class="flexCol">
            <div class="jumbotron jumbotronCurvBorder danger mtSix">
                <h1>Login Form</h1>
            </div>
            <form action="includes/login.inc.php" class="formGroup" method="POST" id="form">
                <div class="inputName marginTwo">
                    <p for="email" class="marginLittle label">Email</p>
                    <input type="text" id="email" name="email" placeholder="Enter your email here" required>
                </div>
                <div class="inputEmail marginTwo">
                    <p for="pwd" class="marginLittle label">Password</p>
                    <input type="password" id="pwd" name="pwd" placeholder="Enter your password here" required>
                </div>
                <div class="marginTwo">
                    <button type="submit" name="login-submit" class="jumboBtn button danger">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="includes/login.inc.js"></script>

    <?php
        if ((isset($_GET['signup'])) && ($_GET['signup'] == "success")) {
            echo '<script>alert("Sign-Up was successful.")</script>';
        } else if ((isset($_GET['error'])) && ($_GET['error'] == "nouser")) {
            echo '<script>alert("No user was found.")</script>';
        }
    ?>

<?php
    include 'includes/footer.inc.php';
?>