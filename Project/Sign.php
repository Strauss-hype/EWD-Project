<?php
extract($_POST);
include("Database.php");
$sql=mysqli_query($conn,"SELECT * FROM users where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else(isset($_POST['save']));

?>