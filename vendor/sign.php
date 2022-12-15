<?php
 session_start();
 require_once 'connect.php';
 $email = $_POST['email'];
 $password = md5($_POST['password']);

 $chek_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

 if(mysqli_num_rows($chek_user)>0){

    $user = mysqli_fetch_assoc($chek_user);

    $_SESSION['user_id'] = $user['id'];
   $user_id = $_SESSION['user_id'];
   echo $user_id;
    $_SESSION['user'] =[
        "id" => $user['id'],
        "name"=> $user['name'],
        "email" => $user['email']

    ];
    header('Location: ../todo.php');

 }else {
    $_SESSION['message'] = 'Неверный логин или пароль!';
    header('Location: ../signin.php');
 }

?>


