<!Doctype html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="School.css" rel="stylesheet" type="text/css">
<style>
img {
  border-radius: 8px;
}
body {
  background-image: url('https://images.squarespace-cdn.com/content/v1/5644bc92e4b0d1606755bcbe/1519157913418-Q4IP2QLZKQR6P6VKBUBU/ke17ZwdGBToddI8pDm48kFmfxoboNKufWj-55Bgmc-J7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iXS6XmVv7bUJ418E8Yoc1hjuviiiZmrL38w1ymUdqq4JaGeFUxjM-HeS7Oc-SSFcg/Hall+of+Fame+001.jpg?format=2500w');
  background-repeat: no-repeat;
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
  <section id="Registrations">
    <div class="section-inner"> <img src="https://assets.entrepreneur.com/content/3x2/2000/20190509074950-Apply-Now-Startup-School-Online-Course-Bigstock-4000pxW-X-2670pxH-copy.jpeg?width=700&crop=2:1" height="150px" class="profile-img">
<center>
  <h3> Register here</h3>
<form action="" method="POST" enctype="multipart/form-data">  
<table border ="1";
	<tr>
	<td colspan="5"align="center">Complete Form</td>
	</tr>
   <tr>  
      <td>Learner ID</td>  
      <td><input type="text" name="id"></td>  
   </tr>
   <tr>  
      <td>First Name</td>  
      <td><input type="text" name="fname"></td>  
   </tr>
   <tr>  
      <td>Last Name</td>  
      <td><input type="text" name="lname"></td>  
   </tr>
   	<tr>
	<td>Male</td>
	<td><input type="radio" name="gender" value"Male"></td>
	</tr>
	<tr>
	<td>Female</td>
	<td><input type="radio" name="gender" value"Female"></td>
	</tr>
	<tr>  
      <td colspan="2" align="center">Select Field:</td>  
   </tr>  
    <tr>  
      <td>Comemerce</td>  
      <td><input type="checkbox" name="Field" value="Commerce"></td>  
   </tr>
   <tr>  
      <td>Science</td>  
      <td><input type="checkbox" name="Field" value="Science"></td>  
   </tr>  
   <tr>  
      <td>Social Science</td>  
      <td><input type="checkbox" name="Field" value="SocialScience"></td>  
   </tr>  
   <tr>  
      <td>Arts & Culture</td>  
      <td><input type="checkbox" name="Field" value="Art"></td>  
   </tr>   
   <tr>  
      <td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td>  
   </tr>

</table>
	</form>
  </center>
    </div>
  </section>
</main>
<?php  
$conn = mysqli_connect("localhost","root", "", "heuva");
if(isset($_POST['submit'])){ 

$name = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$host="localhost"; 
$username="root"; 
$word="";  
$db_name="heuva"; 
$tbl_name="student";  

$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
$checkbox1=$_POST['Subject'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($conn,"insert into student(Field) values ('id','fname','lname','gender','$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
} 

?>  
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>

