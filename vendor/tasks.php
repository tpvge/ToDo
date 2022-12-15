<?php
 session_start();
 require_once 'connect.php';
 $id_user = $_SESSION['user_id'];
 $act = mysqli_query($connect, "SELECT `id`, `active` FROM `list` WHERE `id_user` = $id_user");
 $don = mysqli_query($connect, "SELECT `id`, `done` FROM `list` WHERE `id_user` = $id_user");
 $nodon = mysqli_query($connect, "SELECT `id`, `notdone` FROM `list` WHERE `id_user` = $id_user");
   
 if (isset($_GET['done'])){
    $id = $_GET['done'];
    mysqli_query($connect, "UPDATE `list` SET `done`=`active` WHERE `id` = $id");
    mysqli_query($connect, "UPDATE `list` SET `active`=NULL WHERE `id` = $id");
   
    header('location: ../todo.php');
 }
 if (isset($_GET['nodone'])){
    $id = $_GET['nodone'];
 mysqli_query($connect, "UPDATE `list` SET `notdone`=`active` WHERE `id` = $id");
 mysqli_query($connect, "UPDATE `list` SET `active`=NULL WHERE `id` = $id");
 header('location: ../todo.php');
 }
 if (isset($_GET['deletedon'])){
    $id = $_GET['deletedon'];
    mysqli_query($connect, "UPDATE `list` SET `done`=null WHERE `id` = $id");
    header('location: ../todo.php');
}
if (isset($_GET['deletenot'])) {
    $id = $_GET['deletenot'];
    mysqli_query($connect, "UPDATE `list` SET `notdone`=null WHERE `id` = $id");
    header('location: ../todo.php');
}
 ?>
