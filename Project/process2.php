<?php

if (isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$course = $_POST['course'];

}
echo 'Thank You for registering at C Heuva JSS';
$dbc = mysqli_connect("localhost","root", "", "jss school");

$sql = " INSERT into registration values ('$id', '$name', '$lname', '$email', '$number',$gender, '$department', '$course')";
$query = mysqli_query ($dbc, $sql);
?>