 <?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$message = mysqli_real_escape_string($db, $_POST['message']);
	if(strlen($name)>0 && strlen($email)>0 && strlen($message)>0)
	{
		$time = time();
		mysqli_query($db,"INSERT INTO contact (name,email,message,created_date) VALUES('$name','$email','$message','$time')");
		echo "<h2>Thank You !</h2>";
	}
}
?>