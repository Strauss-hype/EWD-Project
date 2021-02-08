
  <fieldset><legend>Application Form</legend>
 <form method="post" action="appform.php">
<p>
<label for="Firstname">First name: </label>
<input type="text" name="txtname" id="txtname">
</p><p>
<label for="LastName">Last Name: </label>
<input type="text" name="txtlname" id="txtlname">
</p><p>
<label for="Email">Email: </label>
<input type="email" name="txtemail" id="txtemail">
</p><p>
 
 <label for="number">Cellphone Number: </label>
<input type="text" name="txtnumber" "txtnumber">
</p><p>
  <label for="Department">Department: </label>
<input type="text" name="txtdepartment" "txtdepartment">
</p><p>
<input type="submit" value="submit"/>
</fieldset>
</form>
 </form>
  </center> 
  <?php
 $txtname = null;
 $txtlname = null;
 $txtemail= null;
 $txtnumber = null;
 $txtdepartment = null;
$conn = mysqli_connect("localhost","root", "", "heuva");
//Check connection to db

	if($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $txtname = $_POST["txtname" ];
  $txtlname = $_POST["txtlname"];
  $txtemail= $_POST["txtemail"];
  $txtnumber =$_POST["txtnumber"];
  $txtdepartment = $_POST["txtdepartment"];
 } 
 $sql= "INSERT into admission (FirstName,LastName,Email,Number,Department) VALUES ('$txtname', '$txtlname', '$txtemail', '$txtnumber' , '$txtdepartment')";
  /*$query = mysqli_query($conn, $sql);*/
	
?>