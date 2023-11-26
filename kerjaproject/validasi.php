<?php

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = $_POST["Username"];
	$password = $_POST["Password"];
	$result = mysqli_query($conn, "SELECT * FROM login");
	$data = mysqli_fetch_assoc($result);

	if (($data['Username'] == $username) && ($data['Password'] == $password)) {
		header("Location: ./admin.php");
		exit();
	} else {
		echo "<script language='javascript'>";
		echo "alert('WRONG INFORMATION')";
		echo "</script>";
		header("Location: login.php");
		exit();
	}
}

?>