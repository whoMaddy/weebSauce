<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['contact-submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
    
        $sql = "INSERT INTO queries 
                (query_user, query_time, query_email, query_subject, query_message) 
                VALUES ('$name', now(), '$email', '$subject', '$message')";
        $result = mysqli_query($conn, $sql);
    
        header("Location: ../contact.php?query=success");
    }
