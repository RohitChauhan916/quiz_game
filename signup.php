<?php
include("class/users.php");
$register = new users;
extract($_POST);
$img_name=$_FILES['reg_img']['name'];
$tmp_name=$_FILES['reg_img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img_name);
$query = "insert into register values ('','$reg_name','$reg_email','$reg_pass','$img_name')";
if($register->register($query)){
    $register->url("index.php?run=success");
}
?>