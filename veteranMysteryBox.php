<?php
    include 'includes/header.inc.php';
?>

    <div class="fullScreen">
        <div class="flexCol" >
            <div class="flexRow" id="productDisplay">
                <div class="product flexRow">
                    <div class="product-small-img flexCol">
                        <img src="public\images\productPictures\animePillow.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\bokuNoHeroStickers.png" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\animeSmallPillow.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\bedSheet.png" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\lewdHoodie.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                    </div>
                    <div class="img-container">
                        <img src="public\images\productPictures\animePillow.jpg" alt="" class="jumbotronCurvBorder">
                    </div>
                </div>
                <div class="flexCol" id="productDescription">
                    <h1>Veteran Mystery Box</h1>
                    <p>
                        Welcome shut-in NEETS. We are here to treat you with some quality stuff that you've 
                        been longing for. We are not responsible for any repurcussions of your actions what-so-ever. 
                        Obviously, this will include all the items from the other peasant (relatively) services but with 
                        some luxury items like:
                    </p>
                    <ul>
                        <li>Body Pillow (*Once in 3 months)</li>
                        <li>Ahegao Hoodies</li>
                        <li>Bed-Sheets (*Once in 2 months)</li>
                        <li>Official Posters</li>
                    </ul>
                    <h3>Price: Rs. 18,000 *per month</h3>
                    <p>
                        <?php
                        if(isset($_SESSION['user_email'])) {
                            echo '
                                <a href="order.php?product=three" class="jumboBtn pink button">Buy Now</a>
                            ';
                        } else {
                            echo '
                                <a href="getStarted.php?order=login" class="jumboBtn pink button">Buy Now</a>
                            ';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

<script src="includes/services.inc.js"></script>
<script src="includes/product.inc.js"></script>

<?php
    include 'includes/footer.inc.php';
?>