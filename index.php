<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <form action="login.php" method="POST">
        <table>
            <tr>
                <th>Login</th>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="password"></td>
            </tr>

            <tr>
                <td><button name="login_btn">Login</button></td>
                <td><a href="register.php">Create Account</a></td>
            </tr>
        </table>
    </form>
</body>
</html>