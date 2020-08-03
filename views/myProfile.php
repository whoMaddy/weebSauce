<?php
    include 'includes/header.inc.php';
?>

    <div class="flexCol" id="profilePage">
        <div class="jumbotron jumbotronCurvBorder dekugreen mtSix">
            <h1>My Profile</h1>
        </div>
        <form action="includes/myProfile.inc.php" class="formGroup" method="POST" id="form">
            <div class="flexRow marginTwo">
                <div class="inputName">
                    <p for="firstName" class="marginLittle label">First Name</p>
                    <input type="text" name="firstName" id="firstName" placeholder="Enter your first name" value="<?php echo $_SESSION['user_firstname'] ?>" required>
                </div>
                <div class="inputName lastNameDiv">
                    <p for="lastName" class="marginLittle label">Last Name</p>
                    <input type="text" name="lastName" id="lastName" placeholder="Enter your last name" value="<?php echo $_SESSION['user_lastname'] ?>" required>
                </div>
            </div>
            <div class="inputEmail marginTwo">
                <p for="email" class="marginLittle label">Email</p>
                <input type="text" id="email" name="email" placeholder="Enter your email here" value="<?php echo $_SESSION['user_email'] ?>" required>
            </div>
            <div class="inputName marginTwo">
                <p for="address" class="marginLittle label">Address</p>
                <input type="text" id="address" name="address" placeholder="Enter your address here" value="<?php echo $_SESSION['user_address'] ?>" required>
            </div>
            <div class="inputName marginTwo">
                <p for="sub" class="marginLittle label">Your Subscirption</p>
                <input type="text" id="sub" name="sub" placeholder="No subscription was selected" value="<?php 
                    if(isset($_SESSION['user_sub'])) {
                        if ($_SESSION['user_sub'] == '1') {
                            echo 'Starter Mystery Box';
                        } else if ($_SESSION['user_sub'] == '2') {
                            echo 'The Mystery Box';
                        } else if ($_SESSION['user_sub'] == '3') {
                            echo 'Veteran Mystery Box';
                        }
                    }
                ?>" disabled>
                <p class="highlightD">If you want to change the subscription, just select your preferred one from the Services page.</p>
            </div>
            <div class="inputName marginTwo">
                <p for="interests" class="marginLittle label">Interests</p>
                <input type="text" id="interests" name="interests" placeholder="No interests were selected" value="<?php echo $_SESSION['user_interests'] ?>" disabled>
                <p><input type="checkbox" name="genre[]" value="Shounen">Shounen</p>
                <p><input type="checkbox" name="genre[]" value="Slice Of Life">Slice of Life</p>
                <p><input type="checkbox" name="genre[]" value="Psychological">Psychological</p>
                <p><input type="checkbox" name="genre[]" value="Ecchi">Ecchi</p>
                <p><input type="checkbox" name="genre[]" value="Isekai">Isekai</p>
            </div>
            <div class="flexRow marginTwo">
                <div class="inputName">
                    <p for="pwd" class="marginLittle label">New Password</p>
                    <input type="password" id="pwd" name="pwd" placeholder="Enter your password">
                </div>
                <div class="inputName lastNameDiv">
                    <p for="repwd" class="marginLittle label">Confirm Passowrd</p>
                    <input type="password" id="repwd" placeholder="Re-Enter your password">
                </div>
            </div>
            <div class="marginTwo">
                <button type="submit" name="update-submit" class="jumboBtn button dekugreen">Update</button>
                <button type="submit" name="pwd-submit" class="jumboBtn button warning">Change Password</button>
                <button type="submit" name="cancel-submit" class="jumboBtn button danger">Cancel Subscription</button>
            </div>
        </form>
    </div>

    <script src="includes/myProfile.inc.js"></script>

    <?php
        if ((isset($_GET['order'])) && ($_GET['order'] == "success")) {
            echo '<script>alert("Order placed successfully.")</script>';
        } else if ((isset($_GET['sub'])) && ($_GET['sub'] == "cancel")) {
            echo '<script>alert("Subscription cancelled successfully.")</script>';
        } else if ((isset($_GET['changes'])) && ($_GET['changes'] == "success")) {
            echo '<script>alert("Changes saved successfully.")</script>';
        }
    ?>

<?php
    include 'includes/footer.inc.php';
?>