<?php
    include "dbconn.php";
    if(isset($_POST['register'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $insert = "INSERT INTO accounts(firstname,lastname,username,password,role) VALUES('$fname','$lname', '$username','$hashedPassword','student')";
        $result = mysqli_query($conn, $insert);


        if($result){
            header("location:index.php");
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudySync — Create Account</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th colspan="2">Create Account</th>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td>
                    <a href = "index.php" class="btn btn-link">Cancel</a>
                </td>
                <td>
                    <button name = "register" class="btn btn-primary">Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>