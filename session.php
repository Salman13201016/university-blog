<?php
    include 'database/connection.php';
    /* Seession starts here */

    session_start();
    $user_check = $_SESSION['login_user'];
    $sql = "SELECT * FROM user WHERE email = '$user_check'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);

    $login_session = $row['name'];
    if(!isset($login_session)){
        mysqli_close($conn);
        header('location:login.php');
    }
?>