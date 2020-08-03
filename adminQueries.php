<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/header.inc.php';
?>

<?php if(!isset($_SESSION['user_email']) || ($_SESSION['user_email'] != "admin@email.com")) {
    header("Location: index.php?query=notAdmin");
} ?>

    <div class="flexCol">
        <div class="jumbotron jumbotronCurvBorder reddish mtEight">
            <h1>Queries</h1>
            <br>
                <a href="admin.php" class="jumboBtn warning button">Users</a>
                <a href="adminServices.php" class="jumboBtn pink button">Services</a>
        </div>

        <table id="usersTable">
            <thead class="warning">
                <tr>
                    <th>Query_ID</th>
                    <th>Query Time</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
                <?php
                    $sql = "SELECT * FROM queries";
                    $result = mysqli_query($conn, $sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tbody><tr><td>". $row["query_id"] ."</td><td>". $row["query_time"] 
                            ."</td><td>". $row["query_user"] ."</td><td>". $row["query_email"] 
                            ."</td><td>". $row["query_subject"] ."</td><td>". $row["query_message"] 
                            ."</td></tr>";
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

        var tHead = document.querySelector("thead");
        tHead.classList.remove("warning");
        tHead.classList.add("reddish");

        document.title = "Admin - Queries";

    </script>

<?php
        include 'includes/footer.inc.php';
?>