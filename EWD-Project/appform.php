<?php include('Session.php') ?>
<!doctype html>
<html>
<head>
<title>Application Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="School.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
* {
    box-sizing: border-box;
}
.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
img {
  border-radius: 8px;
}
body {
  background-image: url('https://images.squarespace-cdn.com/content/v1/5644bc92e4b0d1606755bcbe/1519157913418-Q4IP2QLZKQR6P6VKBUBU/ke17ZwdGBToddI8pDm48kFmfxoboNKufWj-55Bgmc-J7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iXS6XmVv7bUJ418E8Yoc1hjuviiiZmrL38w1ymUdqq4JaGeFUxjM-HeS7Oc-SSFcg/Hall+of+Fame+001.jpg?format=2500w');
  background-repeat: no-repeat;
  backdrop-filter:blur(8px);
}
</style>
</head>

<body>
<header> <img src="https://wallpapercave.com/wp/wp5016555.jpg" class="profile-img">
  <nav>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Admission.php">Adimssion</a></li>
      <li><a href="Registration.php">Registration</a></li>
      <li><a href="Assesment.php">Assesment</a></li>
      <li><a href="Contact.php">Contact Us</a></li>
	  <li><a href="Signup.php">Sign Up</a></li>
	  <li><a href="Login.php">Log In</a></li>
    </ul>
  </nav>
</header>
<main>
  <center>
 <fieldset><legend>Application Form</legend>
 <form method="post" action="appform.php">
<p>
<label for="Firstname">First name: </label>
<input type="text" name="txtname" id="txtname">
</p><br>
<p>
<label for="LastName">Last Name: </label>
<input type="text" name="txtlname" id="txtlname">
</p><br>
<p>
<label for="Email">Email: </label>
<input type="email" name="txtemail" id="txtemail">
</p><br>
<p>
 <label for="number">Number: </label>
<input type="int" name="intnumber" "intnumber">
</p><br>
<p>
  <label for="Department">Field: </label>
<input type="text" name="txtfield" "txtfield">
</p><br>
<p>
<label for="Course">Grade: </label>
<input type="int" name="intgrade " "intgrade">
</p><br>
<p>
<label for="Course">P O Box: </label>
<input type="int" name="intpobox" "intpobox">
</p><br>
<p>
<label for="Course">Dissabilty: </label>
<input type="text" name="txtdissability " "txtdissability">
</p><br>
<p>
<input type="submit" value="submit"/>
</fieldset>
</form>
 </form>
  </center>
</main>
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>
 
  <?php
 $txtname = null;
 $txtlname = null;
 $txtemail= null;
 $intnumber = null;
 $txtfield = null;
 $intgrade = null;
 $intpobox = null;
 $txtdissability = null;
$conn = mysqli_connect("localhost","root", "", "heuva");
	if(isset($POST['submit'])){
  
  $txtname = $_POST["txtname" ];
  $txtlname = $_POST["txtlname"];
  $txtemail= $_POST["txtemail"];
  $intnumber =$_POST["intnumber"];
  $txtfield = $_POST["txtfield"];
  $intgrade = S_POST["intgrade"];
  $intpobox = S_POST["intpobox"];
  $txtdissability = S_POST["txtdissability"];
  }
  $sql= "INSERT into `Admission`(FirstName,LastName,Email,Number,Field,Grade,POBox,Dissability) VALUES ('$txtname', '$txtlname', '$txtemail', '$intnumber' , 'txtfield', '$intgrade', '$intpobox', '$txtdissability')";
 
?>