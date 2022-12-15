<?php
$connect = mysqli_connect('localhost', 'root', '','todo');

if  (!$connect) {
    die('error connect to DataBase');
}
