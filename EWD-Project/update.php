 <?php 
include('Session.php');
	if (isset($_POST['update'])) {
		$LID = $_POST['LID'];
		$Subject = $_POST['Subject'];
		$testmark = $_POST['testmark'];
		$test = $_POST['test'];
		$AssignmentM = $_POST['AssignmentM'];
		$Assignement = $_POST['Assignement'];
		$Average = $_POST['Average'];

        $sql = "UPDATE `assesments` SET `Learner ID`= $LID `Subject`= $Subject `Test Mark`= $testmark ` Test %`=$test  `Assignement Mark`=$AssignmentM `Assignment %`= $Assignement `Average Total`= $Average WHERE =`Learner ID`='$LID'";
		$result = $db->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $db->error;
		}
	}

if (isset($_GET['Learner ID'])) {
	$LID = $_GET['Learner ID'];

	$sql = "SELECT * FROM `assesments`  WHERE `Learner ID`='$LID'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$LID = $row['LID '];
			$Subject = $row['Subject'];
			$testmark = $row['testmark'];
			$test = $row['test'];
			$AssignmentM = $row['AssignmentM'];
			$Assignement = $row['Assignement'];
			$Average = $row['Average'];
		}

	?>
		<h2>Assessment Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Marks:</legend>
		    Learner ID:<br>
		    <input type="text" name="LID" value="<?php echo $LID; ?>">
		    <input type="hidden" name="Leaner ID" value="<?php echo $id; ?>">
		    <br>
		    Subject:<br>
		    <input type="text" name="Subject" value="<?php echo $Subject; ?>">
		    <br>
		    Test marks:<br>
		    <input type="number" name="testmark" value="<?php echo $testmarks; ?>">
		    <br>
		    Test %:<br>
		    <input type="number" name="test" value="<?php echo $test; ?>">
		    <br>
			 Assignment Mark:<br>
		    <input type="number" name="AssignmentM" value="<?php echo $AssignmentM; ?>">
		    <br>
			 Assignment%:<br>
		    <input type="number" name="Assignement" value="<?php echo $Assignement; ?>">
		    <br>
			 Average Total %:<br>
		    <input type="number" name="Average" value="<?php echo $Average; ?>">
		    <br>
		    
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		header('Location: Home.php');
	}

}
?>