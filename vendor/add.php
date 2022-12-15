<?php
 session_start();
 require_once 'connect.php';
 $active = $_POST['active']; 
 $id_user = $_SESSION['user_id'];
 if (isset($active)>0) {
    mysqli_query($connect, "INSERT INTO `list` (`id_user`,`active`) VALUES ('$id_user','$active')");
    header('Location: ../todo.php');
}

 ?>

