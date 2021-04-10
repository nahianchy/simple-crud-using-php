<?php
$name=$_POST['name'];
$roll=$_POST['roll'];
$gpa=$_POST['gpa'];
$age=$_POST['age'];

$conn=new mysqli('localhost','root','','test');

$sql="INSERT INTO `student`(`id`, `name`, `roll`, `gpa`, `age`, `db`, `class_id`)
     VALUES (null,'$name',$roll,$gpa,$age,null,null)";



if($conn->query($sql)){
    session_start();
    $_SESSION['msg']=' student added successfully';
    header("location:index.php?msg=success");
}

