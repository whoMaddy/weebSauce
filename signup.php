<?php
    include 'includes/header.inc.php';
?>

    <div class="flexCol" id="signUpPage">
        <div class="jumbotron jumbotronCurvBorder purpleish mtSix">
            <h1>SignUp Form</h1>
        </div>
        <form action="includes/signup.inc.php" class="formGroup" method="POST" id="form">
            <div class="flexRow marginTwo">
                <div class="inputName">
                    <p for="firstName" class="marginLittle label">First Name</p>
                    <input type="text" name="firstName" id="firstName" placeholder="Enter your first name" required>
                </div>
                <div class="inputName lastNameDiv">
                    <p for="lastName" class="marginLittle label">Last Name</p>
                    <input type="text" name="lastName" id="lastName" placeholder="Enter your last name" required>
                </div>
            </div>
            <div class="inputEmail marginTwo">
                <p for="email" class="marginLittle label">Email</p>
                <input type="text" id="email" name="email" placeholder="Enter your email here" required>
            </div>
            <div class="inputName marginTwo">
                <p for="address" class="marginLittle label">Address</p>
                <input type="text" id="address" name="address" placeholder="Enter your address here" required>
            </div>
            <div class="inputName marginTwo">
                <p for="interests" class="marginLittle label">Interests</p>
                <p><input type="checkbox" name="genre[]" value="Shounen">Shounen</p>
                <p><input type="checkbox" name="genre[]" value="Slice Of Life">Slice of Life</p>
                <p><input type="checkbox" name="genre[]" value="Psychological">Psychological</p>
                <p><input type="checkbox" name="genre[]" value="Ecchi">Ecchi</p>
                <p><input type="checkbox" name="genre[]" value="Isekai">Isekai</p>
            </div>
            <div class="flexRow marginTwo">
                <div class="inputName">
                    <p for="pwd" class="marginLittle label">Password</p>
                    <input type="password" id="pwd" name="pwd" placeholder="Enter your password">
                </div>
                <div class="inputName lastNameDiv">
                    <p for="repwd" class="marginLittle label">Confirm Passowrd</p>
                    <input type="password" id="repwd" placeholder="Re-Enter your password">
                </div>
            </div>
            <div class="marginTwo">
                <button type="submit" name="signup-submit" class="jumboBtn button purpleish">Sign Up</button>
            </div>
        </form>
    </div>

    <script src="includes/signup.inc.js"></script>

<?php
    include 'includes/footer.inc.php';
?>