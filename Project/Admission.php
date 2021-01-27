<!doctype html>
<html>
<head>
<title>Admission</title>
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
  <section id="Admission">
    <div class="section-inner"> <img src="https://www.niche.com/blog/wp-content/uploads/2019/06/grad-school-applications-1200-1200x794.jpg" class="profile-img">
	
      <h2>Admission</h2>
<center>
	<h1>Application Form</h1>
<body>
	<form action="Process.php" method="POST">
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
	<p>Department: 
	<input type = "text" name= "department"></p>
	<p>Course: 
	<input type = "text" name= "course"></p>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>
 </center> 
 </section>
</main>
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>



