<?php 

$age = array("name"=>$_POST['fName'], "Email"=>$_POST['email'], "Hobby"=>count($_POST['hobby']) > 1 ? "s" : $_POST['hobby'][0], "Gender"=>$_POST['gender']);

echo json_encode($age);
?>