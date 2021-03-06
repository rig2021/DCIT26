<?php

    

    if(isset($_POST['username'])){

        $name = $_POST['username'];
        $password = $_POST['password'];
       if($name == "ADMIN" && $password = "ADMIN123"){
        
           header("Location: https://playvalorant.com/en-us/");
           exit();

       } else{
           header("Location: Login.php?error=wrongpassword");
           exit();
       }
    }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="full-screen">
        <video src="video.mp4" autoplay muted loop></video>
        <div class="contents">
            <img src="valorant.png" alt="">
          </div>
    </div>
    <form class="box" action="#" method="post">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
      </form>
      
</body>
</html>

