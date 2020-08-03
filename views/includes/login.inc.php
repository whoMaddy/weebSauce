<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['login-submit'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM users WHERE user_email=? AND user_pwd=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?query=connFail");
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $pwd);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }

        if ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_firstname'] = $row['user_firstname'];
                $_SESSION['user_lastname'] = $row['user_lastname'];
                $_SESSION['user_address'] = $row['user_address'];
                $_SESSION['user_interests'] = $row['user_interests'];
                $_SESSION['user_sub'] = $row['user_sub'];

                header("Location: ../index.php");
            // }
        } else {
            header("Location: ../login.php?error=nouser");
        }

    } else {
        header("Location: ../index.php?error");
    }
