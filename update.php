<?php

$id=$_GET['id'];

$name=$_POST['name'];
$roll=$_POST['roll'];
$gpa=$_POST['gpa'];
$age=$_POST['age'];

require 'connect.php';

$sql="UPDATE `student`
     SET `name`='$name',`roll`=$roll,`gpa`=$gpa,`age`=$age
      WHERE id=$id ";
 $result=$conn->query($sql);
 
 if($result){
     session_start();
     $_SESSION['msg']='updated successfully';
     header("location:index.php");
 }