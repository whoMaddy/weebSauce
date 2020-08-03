<?php
    include 'includes/header.inc.php';
?>

    <div class="flexCol" id="contactBG">
        <div class="jumbotron jumbotronCurvBorder reddish mtSix">
            <h1>Contact Form</h1>
            <h4>If you have any query regarding our services or anything, just drop it 
                down below and we'll make sure to help you when we get time to see it. 
                (It is, what it is.)
            </h4>
        </div>
        <form action="includes/contactForm.inc.php" method="POST" class="formGroup" id="form">
            <div class="marginTwo">
                <p for="username" class="marginLittle label">Name</p>
                <input type="text" id="username" name="username" placeholder="Enter your full name here" required>
            </div>
            <div class="marginTwo">
                <p for="email" class="marginLittle label">Email Address</p>
                <input type="text" id="email" name="email" placeholder="Enter your email here" required>
                <p class="highlightC">We will definitely keep your email only to ourselves for sure.</p>
            </div>
            <div class="marginTwo">
                <p for="subject" class="marginLittle label">Subject</p>
                <input type="text" id="subject" name="subject" placeholder="Enter your subject here" required>
            </div>
            <div class="marginTwo">
                <p for="message" class="marginLittle label">Message</p>
                <textarea name="message" id="message" name="message" rows="10" required></textarea>
            </div>
            <div class="marginTwo">
                <button type="submit" name="contact-submit" class="jumboBtn button reddish">Submit</button>
            </div>
        </form>
    </div>

    <script src="includes/contact.inc.js"></script>

    <?php
        if ((isset($_GET['query'])) && ($_GET['query'] == "success")) {
            echo '<script>alert("Query Submitted")</script>';
        }
    ?>

<?php
    include 'includes/footer.inc.php';
?>