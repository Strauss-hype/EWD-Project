<?php 
include('Session.php');
?>
<?php 
$sql = "SELECT * FROM assesments";
$result = $db->query($sql);
?>
<!doctype html>
<html>
<head>
<title>Assesments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="School.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
  <section id="Assesments">
    <div class="section-inner"> <img src="https://st.depositphotos.com/1518767/2698/i/600/depositphotos_26981099-stock-photo-magnifying-glass-showing-assessment-word.jpg"  class="profile-img" height="150px">
<body>
<center>
	<h1>View Assesments</h1>
	<div class="container">
	
<table class="table">
	<thead>
		<tr>
		<th>LearnerID</th>
		<th>Subject</th>
		<th>Test Mark</th>
		<th>Test %</th>
		<th>Assignment mark</th>
		<th>Assignment %</th>
		<th>Average Total</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Learner ID ']; ?></td>
					<td><?php echo $row['Subject']; ?></td>
					<td><?php echo $row['Test Mark']; ?></td>
					<td><?php echo $row['Test % ']; ?></td>
					<td><?php echo $row['Assignement Mark']; ?></td>
					<td><?php echo $row['Assignment % ']; ?></td>
					<td><?php echo $row['Average Total ']; ?></td>
					<td><a class="btn btn-info" href="update.php?Leaner ID =<?php echo $row['Leaner ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?Leaner ID=<?php echo $row['Leaner ID']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
<table class="table">
	<thead>
		<tr>
		<th>Learner ID</th>
		<th>Subject</th>
		<th>CA Mark</th>
		<th>Exam Mark</th>
		<th>Average %</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Learner ID ']; ?></td>
					<td><?php echo $row['Subject']; ?></td>
					<td><?php echo $row['CA Mark ']; ?></td>
					<td><?php echo $row['Exam Mark']; ?></td>
					<td><?php echo $row['Average % ']; ?></td>
					<td><?php echo $row['Total ']; ?></td>
					<td><a class="btn btn-info" href="update.php?Leaner ID =<?php echo $row['Leaner ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?Leaner ID=<?php echo $row['Leaner ID']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
</body>
 </center> 
 </section>
</main>
<footer> @ Copyright C Heuva JSS, 2021 </footer>
</body>
</html>



