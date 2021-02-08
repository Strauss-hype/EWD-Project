
<!doctype html>
<html>
<head>
<title>Home</title>
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
.background {
  filter: blur(4px);
  position: absolute;
  width: 100%;
  height: 100%;
}
.foreground {
  backdrop-filter: blur(10px);
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
  <section id="Home">
    <div class="section-inner"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhVn9krw4KyaZv0-OPflrIY4K4PN4jKaGN3A&usqp=CAU" class="profile-img">
      <h1>Welcome to C Heuva Junior Secondary School </h1>
      <p></p>
      <h2></h2>
      <h3></h3>
      <p></p>
    </div>
    <div class="row">
      <div class="column"> <img src="https://www.unam.edu.na/sites/default/files/galleries/1_0.jpg" class="profile-img"style="width:50%"> </div>
      <div class="column"> <img src="https://media.istockphoto.com/photos/education-high-school-building-entrance-copyspace-and-sky-picture-id173761967?k=6&m=173761967&s=612x612&w=0&h=6j8E8UfynbOi5jKSEkoR-jkRsKzsW848sr8vI08_Ync=" class="profile-img" style="width:50%"> </div>
      <div class="column"> <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Larkmead_School%2C_Abingdon%2C_Oxfordshire.png" class="profile-img" style="width:60%"> </div>
    </div>
  <div class="background"></div>
  <div class="foreground"></div>
  </section>
</main>
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>
