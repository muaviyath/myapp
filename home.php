<?php
session_start();

if(!isset($_SESSION["user"])){

    header("location: login.php");
}
echo  $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logout.php" method="post">
        <Button type="submit" >LOGOUT</Button>
    </form>
</body>
</html>