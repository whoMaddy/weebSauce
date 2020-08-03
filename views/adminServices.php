<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/header.inc.php';
?>

<?php if(!isset($_SESSION['user_email']) || ($_SESSION['user_email'] != "admin@email.com")) {
    header("Location: index.php?query=notAdmin");
} ?>

    <div class="flexCol">
        <div class="jumbotron jumbotronCurvBorder pink mtEight">
            <h1>Our Services</h1>
            <br>
                <a href="admin.php" class="jumboBtn warning button">Users</a>
                <a href="adminQueries.php" class="jumboBtn reddish button">Queries</a>
        </div>

        <table id="usersTable">
            <thead class="warning">
                <tr>
                    <th>Service_ID</th>
                    <th>Service Name</th>
                    <th>Price in INR</th>
                </tr>
            </thead>
                <?php
                    $sql = "SELECT * FROM services";
                    $result = mysqli_query($conn, $sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tbody><tr><td>". $row["service_id"] ."</td><td>". $row["service_name"] 
                            ."</td><td>". $row["service_price"] ."</td></tr>";
                        }
                        echo "</tbody></table>";
                    } else {
                        echo "</table><h2>0 Results</h2>";
                    }
                ?>

        <?php
            $sqlOne = "SELECT COUNT(user_sub) FROM users WHERE `user_sub`='1';";
            $resultOne = mysqli_query($conn, $sqlOne);
            $sqlSecond = "SELECT COUNT(user_sub) FROM users WHERE `user_sub`='2';";
            $resultSecond = mysqli_query($conn, $sqlSecond);
            $sqlThird = "SELECT COUNT(user_sub) FROM users WHERE `user_sub`='3';";
            $resultThird = mysqli_query($conn, $sqlThird);
        ?>
        <div class="inputEmail marginTwo">
            <p for="firstService" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Users (Service #1)</span> : <?php 
                if ($resultOne-> num_rows > 0) {
                    while ($row = $resultOne-> fetch_assoc()) { 
                        echo $row["COUNT(user_sub)"]; 
                    }
                } else {
                    echo 'No users found.';
                }
            ?></p>
        </div>
        <div class="inputName marginTwo">
            <p for="secondService" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Users (Service #2)</span> : <?php 
                if ($resultSecond-> num_rows > 0) {
                    while ($row = $resultSecond-> fetch_assoc()) { 
                        echo $row["COUNT(user_sub)"]; 
                    }
                } else {
                    echo 'No users found.';
                }
            ?></p>
        </div>
        <div class="inputEmail marginTwo">
            <p for="thirdService" class="marginLittle label"><span class="black whiteC curvBorder paddingSmall">Users (Service #3)</span> : <?php 
                if ($resultThird-> num_rows > 0) {
                    while ($row = $resultThird-> fetch_assoc()) { 
                        echo $row["COUNT(user_sub)"]; 
                    }
                } else {
                    echo 'No users found.';
                }
            ?></p>
        </div>
    </div>

    <script>
        var homeNav = document.querySelector("#homeNav");
        homeNav.classList.remove("active");

        var tHead = document.querySelector("thead");
        tHead.classList.remove("warning");
        tHead.classList.add("pink");

        document.title = "Admin - Services";

    </script>

<?php
        include 'includes/footer.inc.php';
?>


