<!--if you want to stay on âge if u already loged in copy the !session in the home.php-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MuseMingle Login</title>
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
  
</head>
<body style="background-image :url('../allphoto/loginregister.jpg'); background-position: fixed;
background-size: cover; ">
<div class="container11">
<h2><i style="color:white; font-family: Protest Revolution; font-size: 40px; font-weight: 600; ">login to your account</i></h2>
<?php
include('dbconnect.php') ;
if (isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * FROM account where email='$email'" ;
  $result=mysqli_query($conn,$sql);
  $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($user){//make sure the array isn't empty otherwise the email doesn't exist in the db
    if(password_verify($password,$user['pwd'])){
      session_start();
      $_SESSION["user"]="yes" ;
      header("location:../allphp/home.php");//he loged in ===> became an admin
      die();
    }else{
      echo "<div style='background:#fc7a7a;margin-bottom: 5px;padding:2px 2px 2px 15px;border-radius: 10px;'>password invalid</div>";
    }
  }else{
    echo "<div style='background:#fc7a7a;margin-bottom: 5px;padding:2px 2px 2px 15px;border-radius: 10px;'>account doesn't exist</div>";
  }
}

?>
  <form action="login.php" method="post">
    <div class="mb-3">
      <label style="color: white;" for="exampleInputEmail1" class="form-label">Email address</label>
      <input style="background-color: rgba(164, 164, 164, 0.975); border: none;" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
      <div style="color: white;" id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" style="color: white;" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" style="background-color: rgba(164, 164, 164, 0.975); border: none;", id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" style="color: white;" for="exampleCheck1">REMEMBER ME</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="forgot-password1" style="color: white;"  href="forgot_password.html" >Forgot Password?</a>
      
    </div>
    <input type="submit" name="login" value="login" class="btn btn-outline-dark" style="width: 100%; color: white; border: 2px solid white;" >
    <div class="signup-link">
      <p style="color: #fff;">Don't have an account?</p>
      <button onclick="window.location.href='signup.php'" type="button" style="color: white; border:2px solid white;" class="btn btn-outline-dark">Create Account</button>
    </div>
  </form>
  </div>
  </body>
  </html>
