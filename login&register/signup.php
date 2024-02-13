<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MuseMingle Login</title>
  <link rel="stylesheet" href="signup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
  <style>
    .password-container {
        position: relative;
    }
    .password-toggle {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
    .repassword-container {
        position: relative;
    }
    .repassword-toggle {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
  </style>
</head>
<body style="background-image :url('../allphoto/loginregister.jpg'); background-position: fixed;
background-size: cover; ">
<div class="container11">
<h2><i style="color:white; font-family: Protest Revolution; font-size: 40px; font-weight: 600; ">sign up here</i></h2>
  <form  action="signup.php" method="post">
<?php
include 'dbconnect.php' ;
if (isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password2=$_POST['password2'];
  $pwdhash=password_hash($password,PASSWORD_DEFAULT);


  //validation of the forms
  $errors=array();//stack the errors in the array than print then in case of an error
  if(empty($name) || empty($password) || empty($email) || empty($password2) ){
    array_push($errors,"all fields are required");
  }
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    array_push($errors,"email invalid");
  }
  if(strlen($password)<8){
    array_push($errors,"password must be at least 8 characters");
  }
  if($password !== $password2){
    array_push($errors,"password doesn't match");
  }

  //make sure the e-mail is not used twice
  include('dbconnect.php') ;
  $query="SELECT * FROM account where email='$email' ";
  $result=mysqli_query($conn,$query);
  $rowcount=mysqli_num_rows($result);//count the number of rows of the fetched sql
  if($rowcount>0){
    array_push($errors,"email already exists");
  }
  if(count($errors)>0){
    foreach($errors as $error){
      echo "<div style='background:#fc7a7a;margin-bottom: 5px;padding:2px 2px 2px 15px;border-radius: 10px;'>$error</div>" ;
    }
  }else{
    //data will be inserted 
    $sql="insert into account (fullname,email,pwd) values ('$name','$email','$pwdhash')";
    $result=mysqli_query($conn,$sql); 
    if(!$result){
      echo 'error' ;
    }else{
      echo "<div class='alert alert-success'>registred successfully</div>" ;
    }
  }

}


?>
  <form  action="signup.php" method="post">
    <div class="mb-3">
      <input style="background-color: rgba(164, 164, 164, 0.975); border: none; margin-top: 15px;" type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
    </div>
    <div class="mb-3">
      <input style="background-color: rgba(164, 164, 164, 0.975); border: none;" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail: name@example.com">
    </div>
    <div class="mb-3 password-container">
      <input type="password" class="form-control" name="password" style="background-color: rgba(164, 164, 164, 0.975); border: none;", id="exampleInputPassword1" placeholder="your password" minlength="8">
      <span class="password-toggle" onclick="togglePasswordVisibility1()" >Show</span>
    </div>
    <div class="mb-3 repassword-container">
      <input style="background-color: rgba(164, 164, 164, 0.975); border: none;" name="password2" type="password" class="form-control" id="exampleInputPassword2" placeholder="repeat your password" minlength="8">
      <span class="repassword-toggle" onclick="togglePasswordVisibility2()" >Show</span>
    </div>
    <input type="submit" name="submit" class="btn btn-outline-dark" style="width: 100%; color: white; border: 2px solid white;" value="sign up">
    <div class="signup-link">
      <br>
      <p style="color: #fff;">you already have an account ?</p>
      <button onclick="window.location.href='login.php'" type="button" style="color: white; border:2px solid white;" class="btn btn-outline-dark">login</button>
    </div>
  </form>
  </div>

  <script>
    function togglePasswordVisibility1() {
        var passwordInput = document.getElementById("exampleInputPassword1");
        var passwordToggle = document.querySelector(".password-toggle");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            passwordToggle.textContent = "Show";
        }
    }
    function togglePasswordVisibility2() {
        var passwordInput = document.getElementById("exampleInputPassword2");
        var passwordToggle = document.querySelector(".repassword-toggle");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            passwordToggle.textContent = "Show";
        }
    }
  </script>

</body>
</html>
