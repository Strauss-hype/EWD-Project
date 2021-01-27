<?php

if (isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$department = $_POST['department'];
$course = $_POST['course'];

}
echo 'Thank You for applying to C Heuva JSS we will Notify you of your Admission.';
$dbc = mysqli_connect("localhost","root", "", "jss school");

$sql = " INSERT into admission values ('$id', '$name', '$lname', '$email', '$number', '$department', '$course')";
$query = mysqli_query ($dbc, $sql);
?>