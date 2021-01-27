<!doctype html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="School.css" rel="stylesheet" type="text/css">
  <style> 
	input[type=text] {
	width: 10%;
	}
	form {
	margin: 0;
	padding: 1em 0;
	border: 3px solid black;

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
      <li><a href="Staff.php">Staff</a></li>
      <li><a href="Announcement.php">Announcement</a></li>
      <li><a href="Contact.php">Contact Us</a></li>
	  <li><a href="Sign up.php">Sign Up</a></li>
	  <li><a href="log in.php">Log In</a></li>
    </ul>
  </nav>
</header>
<main>
  <section id="Registrations">
    <div class="section-inner"> <img src="https://assets.entrepreneur.com/content/3x2/2000/20190509074950-Apply-Now-Startup-School-Online-Course-Bigstock-4000pxW-X-2670pxH-copy.jpeg?width=700&crop=2:1" class="profile-img">
      
	  <h2>Registration</h2>
<center>
  <h3> Register here</h3>
<form action="process2.php" method="POST">
	<p>ID/Passport Number: 
	<input type = "text" name= "id"></p>
	<p>First name: 
	<input type = "text" name= "fname"></p>
	<p>Last name: 
	<input type = "text" name= "lname"></p>
	<p>Email: 
	<input type = "text" name= "email"></p>
	<p>Cellphone/ Telephone Number: 
	<input type = "int" name= "number"></p>
	<input type="radio" id=" male " name="gender" value=" male ">
	<label for=" male ">Male</label><br>
	<input type="radio" id=" female " name="gender" value=" female ">
	<label for=" female ">Female</label><br>
	<p>Department: 
	<input type = "text" name= "department"></p>
	<p>Course:<p/>
	<input type="radio" id=" Mathematics " name="course" value=" Mathematics ">
	<label for="course">Mathematics</label><br>
	<input type="radio" id=" Biology " name="course" value="Biology">
	<label for="course">Biology</label><br>
	<input type="submit" name="submit" value="Submit">
	</form>
  </center>
    </div>
  </section>
</main>
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>

