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
    <button type="submit">LOGIN</button>
    </form>
</body>
</html>

<?php

$demail= "ibrahim@123";
$dpassword= "123";

if(isset($_POST["email"]) && isset($_POST["password"])){
    $uemail= $_POST["email"];
    $upassword= $_POST["password"];

if($demail==$uemail){
    
    if($dpassword==$upassword){
        echo "Login";
    }else{
        echo "Invalid Password";
    }
    }else{
    echo "invalid Email";
}
}
?>