<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Login </title>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('img/logo MGH.jpg') }}" alt="">
    </div>
    <div class="container">
        <h1>Log In</h1>
        <form action="" method="POST">
            <div class="input">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Entrer votre nom" name="name">
            </div>

            <div class="input">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="password" placeholder="Entrer votre mot de passe" name="password">
            </div>

            <button type="submit" name="login">Log In</button><br>
            <button type="submit" name="signin">Sign In</button><br>
            
        </form>
    </div>
</body>
</html>
<?php 
    if(isset($_POST['login'])){
        header("Location: /login");
    }

    if(isset($_POST['signin'])){
        header("Location: /propos");
    }

?>