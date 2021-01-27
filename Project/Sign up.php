<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign Up</title>
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
<center>
<div class="signup-form">
    <form action="Sign.php" method="post" enctype="multipart/form-data">
		<h2>Sign Up</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Sign Up Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="log in.php">Sign in</a></div>
    </form>
	
</div>
</center>
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>
