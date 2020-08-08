<?php
    $dbServernameNew = "localhost";
    $dbUsernameNew = "root";
    $dbPasswordNew = "animesucker";
    
    $connNew = mysqli_connect($dbServernameNew, $dbUsernameNew, $dbPasswordNew);
    
    if (!$connNew) {
        die("connection failed: ".connect_error());
    }

    //create database
    $sqlDatabase = "CREATE DATABASE weeb_sauce";
    $result1 = mysqli_query($connNew, $sqlDatabase);

    $connNew->close();
?>

<?php
    include_once 'includes\dbh.inc.php';

    //create users table
    $sqlUsers = "CREATE TABLE users (
        user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
        user_time DATETIME not null,
        user_firstname TINYTEXT not null,
        user_lastname TINYTEXT not null,
        user_fullname TINYTEXT not null,
        user_email TINYTEXT not null,
        user_address varchar(256) not null,
        user_interests varchar(256) not null,
        user_pwd LONGTEXT not null,
        user_sub varchar(256))";
    $result2 = mysqli_query($conn, $sqlUsers);

    //create services table
    $sqlServices = "CREATE TABLE services (
        service_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
        service_name varchar(256) not null,
        service_price varchar(256) not null)";
    $result3 = mysqli_query($conn, $sqlServices);

    //create queries table
    $sqlQueries = "CREATE TABLE queries (
        query_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
        query_time DATETIME not null,
        query_user varchar(256) not null,
        query_email varchar(256) not null,
        query_subject varchar(256) not null,
        query_message text(1000) not null)";
    $result4 = mysqli_query($conn, $sqlQueries);
?>

<?php
    //adding admin user
    $sqlAdmin = "INSERT INTO users 
    (user_time, user_firstname, user_lastname, user_fullname, user_email, user_address, user_pwd) 
    VALUES (now(), 'Admin', 'User', 'Admin User', 'admin@email.com', 'India', 'admin')";
    $result5 = mysqli_query($conn, $sqlAdmin);

    //adding services
    $sqlService1 = "INSERT INTO `services`(`service_name`, `service_price`) VALUES ('Starter Mystery Box','Rs. 4,500 per month')";
    $result6 = mysqli_query($conn, $sqlService1);

    $sqlService2 = "INSERT INTO `services`(`service_name`, `service_price`) VALUES ('The Mystery Box','Rs. 10,000 per month')";
    $result7 = mysqli_query($conn, $sqlService2);

    $sqlService3 = "INSERT INTO `services`(`service_name`, `service_price`) VALUES ('Veteran Mystery Box','Rs. 18,000 per month')";
    $result8 = mysqli_query($conn, $sqlService3);

    //adding one query
    $sqlMessage = "INSERT INTO `queries`(`query_time`, `query_user`, `query_email`, `query_subject`, `query_message`) 
        VALUES (now(),'Someone','someone@email.com','Service Review','Your services are amazing and i will it recommend my friends too.')";
    $result9 = mysqli_query($conn, $sqlMessage);

    header("Location: index.php?database=success");
?>