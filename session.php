<?php
    include 'database/connection.php';
    /* Seession starts here */

    session_start();
    $user_check = $_SESSION['login_user'];
    $sql = "SELECT * FROM user WHERE email = '$user_check'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);

    $login_session = $row['name'];
    $_SESSION['login_id'] = $row['id'];
    

    // if(isset($login_session)){
    //     header('location:index.php');
    // }
    if(!isset($login_session)){
        mysqli_close($conn);
        header('location:login.php');
    }
    // if(isset($_SESSION['login_id'])){
    //     header('location:index.php');
    // }
    // else{
    //     header('location:index.php');
    // }
?>