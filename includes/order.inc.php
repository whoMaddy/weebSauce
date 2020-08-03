<?php
    session_start();

    include_once 'dbh.inc.php';

    if(isset($_POST['orderOne-submit'])) {
        $user_id = $_SESSION['user_id'];
    
        $sql = "UPDATE `users` SET `user_sub`='1' 
        WHERE `user_id`='$user_id'";
        
        mysqli_query($conn, $sql);

        $_SESSION['user_sub'] = '1';

        header("Location: ../myProfile.php?order=success");
    } else if(isset($_POST['orderTwo-submit'])) {
        $user_id = $_SESSION['user_id'];
    
        $sql = "UPDATE `users` SET `user_sub`='2' 
        WHERE `user_id`='$user_id'";
        
        mysqli_query($conn, $sql);

        $_SESSION['user_sub'] = '2';

        header("Location: ../myProfile.php?order=success");
    } else if(isset($_POST['orderThree-submit'])) {
        $user_id = $_SESSION['user_id'];
    
        $sql = "UPDATE `users` SET `user_sub`='3' 
        WHERE `user_id`='$user_id'";
        
        mysqli_query($conn, $sql);

        $_SESSION['user_sub'] = '3';

        header("Location: ../myProfile.php?order=success");
    }