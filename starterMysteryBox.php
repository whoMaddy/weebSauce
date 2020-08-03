<?php
    include 'includes/header.inc.php';
?>

    <div class="fullScreen">
        <div class="flexCol" >
            <div class="flexRow" id="productDisplay">
                <div class="product flexRow">
                    <div class="product-small-img flexCol">
                        <img src="public\images\productPictures\blackShirt.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\narutoStickers.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\nezukoSticker.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\keychains.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                        <img src="public\images\productPictures\demonSlayerKeychains.jpg" alt="" onclick="makeItBig(this)" class="curvBorder">
                    </div>
                    <div class="img-container">
                        <img src="public\images\productPictures\blackShirt.jpg" alt="" class="jumbotronCurvBorder">
                    </div>
                </div>
                <div class="flexCol" id="productDescription">
                    <h1>Starter Mystery Box</h1>
                    <p>
                        This box will get you started for a journey towards a larger
                        collection of anime goodies which we hope to be a large part of.
                        The content in this box would mainly be from popular manga series which
                        probably you will be already familiar with.
                    </p>
                    <ul>
                        <li>Manga</li>
                        <li>Anime T-shirts</li>
                        <li>Stickers</li>
                        <li>Key Chains</li>
                    </ul>
                    <h3>Price: Rs. 4,500 *per month</h3>
                    <p>
                        <?php
                        if(isset($_SESSION['user_email'])) {
                            echo '
                                <a href="order.php?product=one" class="jumboBtn pink button">Buy Now</a>
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