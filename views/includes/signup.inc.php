<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['signup-submit'])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $fullName = $_POST['firstName']. " " .$_POST['lastName'];
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $interestsArray = $_POST['genre'];
        $interests = implode(", ", $interestsArray);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
        $sql = "INSERT INTO users 
                (user_time, user_firstname, user_lastname, user_fullname, user_email, user_address, user_interests, user_pwd) 
                VALUES (now(), '$firstName', '$lastName', '$fullName', '$email', '$address', '$interests', '$pwd')";
        $result = mysqli_query($conn, $sql);
    
        header("Location: ../login.php?signup=success");
    }
