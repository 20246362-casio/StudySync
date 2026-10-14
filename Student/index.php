<?php
    include '../dbconn.php';
    session_start();
    if(!isset($_SESSION["USERNAME"])){
        session_destroy();
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['USERNAME']; ?></h1> <a href = "logout.php">Logout</a>
    <br><br><hr>
    <table>
        <?php
            $fetch = "SELECT * FROM accounts WHERE role = 'student' ";
            $result = mysqli_query($conn, $fetch);
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <?php
            }
        ?>
    </table>
</body>
</html>