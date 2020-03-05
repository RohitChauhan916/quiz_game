<?php
include("class/users.php");
$register = new users;
extract($_POST);
$reg_email = $_POST['reg_email'];
$img_name=$_FILES['reg_img']['name'];
$tmp_name=$_FILES['reg_img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img_name);
$query = "select email from register where email='".$reg_email."'";
$row = $register->register($query);
//$query = "insert into register values ('','$reg_name','$reg_email','$reg_pass','$img_name')";
if($row < 0){
    $register->url("index.php?run=allreadyexists");
}
else{
    $email_reg = "insert into register values ('','$reg_name','$reg_email','$reg_pass','$img_name')";
    $register->register($email_reg);
    $register->url("index.php?run=success");
    }
?>