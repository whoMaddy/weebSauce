<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/header.inc.php';
?>

<?php if(!isset($_SESSION['user_email']) || ($_SESSION['user_email'] != "admin@email.com")) {
    header("Location: index.php?query=notAdmin");
} ?>

    <div class="flexCol">
        <div class="jumbotron jumbotronCurvBorder warning mtEight">
            <h1>Our Users</h1>
            <br>
            <a href="adminQueries.php" class="jumboBtn reddish button">Queries</a>
            <a href="adminServices.php" class="jumboBtn pink button">Services</a>
        </div>

        <table id="usersTable">
            <thead class="warning">
                <tr>
                    <th>User_ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Address</th>
                    <th>Interests</th>
                    <th>Service_ID</th>
                </tr>
            </thead>
                <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tbody><tr><td>". $row["user_id"] ."</td><td>". 
                            $row["user_fullname"] ."</td><td>".$row["user_email"] .
                            "</td><td>". $row["user_address"] ."</td><td>". 
                            $row["user_interests"] ."</td><td>". $row["user_sub"] .
                            "</td></tr>";
                        }
                        echo "</tbody></table>";
                    } else {
                        echo "</table><h2>0 Results</h2>";
                    }
                ?>

    </div>

    <script>
        var homeNav = document.querySelector("#homeNav");
        homeNav.classList.remove("active");

        document.title = "Admin - Users";

    </script>

<?php
        include 'includes/footer.inc.php';
?>