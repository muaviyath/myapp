 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Please Login</h1>
    <form action="#" method="post">

    <label>Email</label><br>
    <input type="email" name="email"><br>
    <br>
    <label>Password</label><br>
    <input type="password" name="password"><br>
    <br>
    <input type="submit" value="login">
    <br>
    <Button type="reset" >Clear</Button>
    </form>
</body>
</html>

<?php

$demail= "ibrahim@123";
$dpassword= "123";

if(isset($_POST["email"])){

    if(!empty($_POST["email"]) && !empty($_POST["password"])){

       
        if($_POST["email"] == $demail && $_POST["password"] == $dpassword){

            session_start();
            $_SESSION["user"] = $_POST["email"]; 
            header("location: home.php");
        }else{
            echo "Invalid password or email";
        }
    }else{

        header("location: login.php");
    }
}