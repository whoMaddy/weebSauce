<?php
    include 'includes/header.inc.php';
?>

    <div class="fullScreen" id="ourServices">
        <div class="flexCol fullHeight">
            <div class="jumbotron jumbotronCurvBorder transparentColor pinkBorder">
                <h1>Our Services</h1>
                <h4>
                    As of now, we offer 3 exclusive mystery box services which you can 
                    choose from: 'Starter Mystery Box', 'The Mystery Box', and at last 
                    'The Veteran Mystery Box'. These will be delivered to your house every
                    month.
                </h4>
                <hr>
                <p>
                    Feeling the vibe?
                </p>
                <br>
                <button onclick="scrollDown()" class="jumboBtn pink button scrollDown">Scroll Down</button>
            </div>
            <div class="jumboFoot transparentColor">
                <p class="jumboFootP">>></p>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="thirdService">
        <div class="flexCol fullHeight">
            <div class="jumbotron transparentColor yellowSideBorderSpl">
                <h1>Veteran Mystery Box</h1>
                <h4>
                    At last, comes our most overpowered subscription. This will include all 
                    the quirks of the other two but in more quantities. On top of that, it 
                    will also bring some special merchandise every two months that you 
                    definately cannot afford to lose.
                </h4>
                <a href="veteranMysteryBox.php" class="jumboBtn warning button">Learn More</a>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="secondService">
        <div class="flexCol fullHeight">
            <div class="jumbotron transparentColor blueSideBorderSpl">
                <h1 class="rPosition">The Mystery Box</h1>
                <h4>
                    At second place, comes the best price to value ratio service which 
                    will only take a little bit from your wallet but also gives you the 
                    most out of it. It will come with anime goodies from posters, to even 
                    wearables like headbands or t-shirts and much more. 
                </h4>
                <p class="rPosition">
                    <a href="theMysteryBox.php" class="jumboBtn blue button">Learn More</a>
                </p>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="firstService">
        <div class="flexCol fullHeight">
            <div class="jumbotron transparentColor redSideBorderSpl">
                <h1>Starter Mystery Box</h1>
                <h4>
                    It is the go-to subscription to just get you started and it will 
                    get you anime goodies like stickers, posters, and even small figurines. 
                </h4>
                <a href="starterMysteryBox.php" class="jumboBtn danger button">Learn More</a>
            </div>
        </div>
    </div>
    <div class="fullScreen" id="deliveryPart">
        <div class="flexCol fullHeight">
            <div class="jumbotron transparentColor darkBlueSideBorderSpl">
                <h1 class="rPosition">Our Delivery Services</h1>
                <h4>
                    You: Clicks Buy Now, <br> Us: Rings Your Door Bell (In no time of course)
                </h4>
            </div>
        </div>
    </div>

<script src="includes/services.inc.js"></script>

<?php
    include 'includes/footer.inc.php';
?>