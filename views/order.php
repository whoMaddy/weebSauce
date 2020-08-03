<?php
    include 'includes/header.inc.php';
?>

<div class="flexCol" id="orderPage">
        <div class="jumbotron jumbotronCurvBorder pink mtSix">
            <h1>Order Form</h1>
            <p>If you want to change the billing info, then go to myProfile page.</p>
        </div>
        <form action="includes/order.inc.php" class="formGroup" method="POST" id="form">
            <div class="flexRow marginTwo">
                <div class="inputName">
                    <p for="firstName" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">First Name</span> : <?php echo $_SESSION['user_firstname'] ?></p>
                </div>
                <div class="inputName lastNameDiv">
                    <p for="lastName" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Last Name</span> : <?php echo $_SESSION['user_lastname'] ?></p>
                </div>
            </div>
            <div class="inputEmail marginTwo">
                <p for="email" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Email</span> : <?php echo $_SESSION['user_email'] ?></p>
            </div>
            <div class="inputName marginTwo">
                <p for="address" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Address</span> : <?php echo $_SESSION['user_address'] ?></p>
            </div>
            <div class="inputName marginTwo">
                <p for="interests" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Interests</span> : <?php echo $_SESSION['user_interests'] ?></p>
            </div>
            <?php if ($_GET['product'] == "one") { ?>
                <div class="inputName marginTwo">
                    <p for="service" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Your Order</span> : Starter Mystery Box</p>
                </div>
                <div class="inputName marginTwo">
                    <p for="price" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Price</span> : Rs. 4,500 *per month</p>
                </div>
                <div class="marginTwo">
                <button type="submit" name="orderOne-submit" class="jumboBtn button pink">Place Order</button>
                </div>
            <?php } else if ($_GET['product'] == "two") { ?>
                <div class="inputName marginTwo">
                    <p for="service" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Your Order</span> : The Mystery Box</p>
                </div>
                <div class="inputName marginTwo">
                    <p for="price" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Price</span> : Rs. 10,000 *per month</p>
                </div>
                <div class="marginTwo">
                <button type="submit" name="orderTwo-submit" class="jumboBtn button pink">Place Order</button>
                </div>
            <?php } else if ($_GET['product'] == "three") { ?>
                <div class="inputName marginTwo">
                    <p for="service" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Your Order</span> : Veteran Mystery Box</p>
                </div>
                <div class="inputName marginTwo">
                    <p for="price" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Price</span> : Rs. 18,000 *per month</p>
                </div>
                <div class="marginTwo">
                <button type="submit" name="orderThree-submit" class="jumboBtn button pink">Place Order</button>
                </div>
            <?php } ?>
        </form>
    </div>

    <script src="includes/order.inc.js"></script>

<?php
    include 'includes/footer.inc.php';
?>