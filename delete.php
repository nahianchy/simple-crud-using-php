<?php

$id=$_GET['id'];

require 'connect.php';

$sql="DELETE FROM `student` WHERE `id` = '$id' ";

$result=$conn->query($sql);

if($result){
    session_start();
    $_SESSION['msg']="delete succesfully";
    header("location:index.php");
}