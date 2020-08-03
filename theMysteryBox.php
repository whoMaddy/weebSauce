<?php
    include 'includes/header.inc.php';
?>

    <div class="fullScreen">
        <div class="flexCol" >
            <div class="flexRow" id="productDisplay">
                <div class="product flexRow">
                    <div class="product-small-img flexCol">
                        <img src="public\images\productPictures\blackHoodie.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\headbands.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\haikyuuFigures.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\wig.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\senpaiShirt.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                    </div>
                    <div class="img-container">
                        <img src="public\images\productPictures\blackHoodie.jpg" alt="" class="jumbotronCurvBorder">
                    </div>
                </div>
                <div class="flexCol" id="productDescription">
                    <h1>The Mystery Box</h1>
                    <p>
                        This box is especially for the people who are already familiar with anime and
                        are wanna-be weebs. This will include all the items of the starter pack in
                        more quantity and more awesome items like:
                    </p>
                    <ul>
                        <li>Manga</li>
                        <li>Hoodies</li>
                        <li>Cosplay Items</li>
                        <li>Wearables</li>
                    </ul>
                    <h3>Price: Rs. 10,000 *per month</h3>
                    <p>
                        <?php
                        if(isset($_SESSION['user_email'])) {
                            echo '
                                <a href="order.php?product=two" class="jumboBtn pink button">Buy Now</a>
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