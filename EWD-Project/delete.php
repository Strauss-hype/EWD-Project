<?php 
session_start();;

if (isset($_GET['Learner ID'])) {
	$user_id = $_GET['Learner ID'];

	$sql = "DELETE FROM `assesments` WHERE `Learner ID`='$LID'";


	$result = $db->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $db->error;
	}
}

?>