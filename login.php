<?php
	session_start();
	include "dbconn.php";

	if(isset($_POST['login_btn'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$fetch = "SELECT * FROM accounts WHERE username = '$username' ";
		$result = mysqli_query($conn, $fetch);

		if(mysqli_num_rows($result)<1){
			echo "<script>alert('No accounts'); </script>";
		}
		else{
			while ($row = mysqli_fetch_assoc($result)) {
				if($password == $row['password'] && $row['role'] == "admin"){
					$_SESSION["USERNAME"] = $row['username'];
					$_SESSION["FNAME"] = $row['firstname'];
					$_SESSION["LNAME"] = $row['lastname'];


					header("location:admin/index.php");
				}
				else if($password == $row['password'] && $row['role'] == "student"){
					$_SESSION["USERNAME"] = $row['username'];
					$_SESSION["FNAME"] = $row['firstname'];
					$_SESSION["LNAME"] = $row['lastname'];


					header("location:student/index.php");
				}
				else{
					header("location:index.php");
				}
			}
		}
	}
?>  