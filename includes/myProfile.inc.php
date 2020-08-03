<?php
    session_start();

    include_once 'dbh.inc.php';

    if(isset($_POST['update-submit'])) {
        $newfirstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $newlastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $fullName = $_POST['firstName']. " " .$_POST['lastName'];
        $newemail = mysqli_real_escape_string($conn, $_POST['email']);
        $newaddress = mysqli_real_escape_string($conn, $_POST['address']);
        $interestsArray = $_POST['genre'];
        $newinterests = implode(", ", $interestsArray);
        $user_id = $_SESSION['user_id'];
    
        $sql = "UPDATE `users` SET `user_firstname`='$newfirstName',`user_lastname`='$newlastName',
        `user_fullname`='$fullName', `user_email`='$newemail',`user_address`='$newaddress',
        `user_interests`='$newinterests' WHERE `user_id`='$user_id'";
        
        mysqli_query($conn, $sql);
    
        $_SESSION['user_email'] = $newemail;
        $_SESSION['user_firstname'] = $newfirstName;
        $_SESSION['user_lastname'] = $newlastName;
        $_SESSION['user_address'] = $newaddress;
        $_SESSION['user_interests'] = $newinterests;

        header("Location: ../myProfile.php?changes=success");
    }

    if(isset($_POST['pwd-submit'])) {
        $newpwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $user_id = $_SESSION['user_id'];
    
        $sql = "UPDATE `users` SET `user_pwd`='$newpwd' 
        WHERE `user_id`='$user_id'";
        
        mysqli_query($conn, $sql);
    
        session_unset();
        session_destroy();    

        header("Location: ../index.php?pwdChange=success");
    }

    if(isset($_POST['cancel-submit'])) {
        $user_id = $_SESSION['user_id'];

        $sql = "UPDATE `users` SET `user_sub`= NULL 
        WHERE `user_id`='$user_id'";
        
        mysqli_query($conn, $sql);

        $_SESSION['user_sub'] = '';
    
        header("Location: ../myProfile.php?sub=cancel");
    }