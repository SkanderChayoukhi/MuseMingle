<?php 
if (isset($_GET['message'])){
    $message = $_GET['message'];        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'poppins', sans-serif ;
    background: url(../allphoto/contactbackground.jpg) no-repeat;
    background-position: fixed;
    background-size: cover;
}
.whitebox{
    position: absolute;
    top: 30%;
    background: white;
    border-radius: 20px;
    left: 20%;
    height: 55%;
    width: 60%;
    box-shadow: 0 0 20px 5px #fff; /* Ombre noire plus prononcée */
    transition: box-shadow 1s ease;
    display: flex;
    justify-content: space-between;
}
.whitebox:hover {
  box-shadow: 0 0 30px 10px #fff; /* Changement d'ombre au survol */
}
.whitebox .photo img{
    width: 80%;
}
.whitebox .photo{
    display: flex;
    justify-content: center;
    align-content: center;
    padding-top: 40px;
    width: 50%;
}
.whitebox .form{
    display: flex;
    align-items: center;
    margin-right: 190px;
    margin-bottom: 15px;
}
.whitebox .form input{
    border-radius: 15px;
    border: none;
    padding: 15px;
    margin-top: 15px;
    width: 100%;
     background: lightcyan;
}
.whitebox .form textarea{
    padding: 15px;
    margin-top: 15px;
    border-radius: 15px;
    border: none;
    background-color: lightcyan;
}
.whitebox .form button{
    padding: 15px;
    font-size: 25px;
    font-weight: 600;
    letter-spacing: 3px;
    width : 100%;
    border-radius: 10px;
    border: none;
    font-family: Protest Revolution;
    background-color: skyblue;
    cursor: pointer;
    transition: 0.5s ease;
}
.whitebox .form button:hover{
    color: white;
}
.whitebox .icons{
    position: absolute;
    left: 87%;
    top: 30%;
}
.whitebox .icons a{
    border: none;
    border-radius: 5px;
    font-size: 40px;
    padding: 10px;
    color: #ff1493;
        
}
nav{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    padding: 1.3vw 8vw;
    align-items: center;
    box-shadow: 2px 2px 10px  black;
    background-color: white;
    width: 100%;
    position: fixed;
    z-index: 999;/*TRES INTERRESSANT POUR QUE LE NAV BAR RESTE TJRS EN DESSUS QUAND ON SLIDE UP OR DOWN*/
}
nav img{
    width: 130px;
    cursor: pointer;
}
nav .navigation ul{
    display: flex;
    justify-content: flex-end;
}
nav .navigation ul li{
    list-style: none;
    margin-left: 30px;
}
nav .navigation ul li a{
    text-decoration: none;
    color: black;
    font-size: 17px;
    font-weight: 500 ;
    transition: 0.3s ease;
}
nav .navigation ul li select{
    background-color: white;
    border: none;
    color: black;
    font-size: 16px;
    font-weight: 500 ;
    cursor: pointer;
}
nav .navigation ul li a:hover{
    color: rgb(164, 7, 7);
}
nav .navigation ul li a.active{
    color: rgb(164, 7, 7);
}
</style>
<body>
    <nav>
        <a href="../allphp/home.php">
            <img src="../allphoto/logo.png" alt="">
        </a>
        <div class="navigation">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./gallerypage.php">Gallery</a></li>
                <li><a  class="active" href="./contact.php">Contact us</a></li>
                <li><a  href="">games</a></li>
            </ul>
        </div>
    </nav>

    <div class="whitebox">
        <div class="photo">
            <img src="../allphoto/contactform.png" alt="">
        </div>
        <div class="form">
            <form action="traitement.php" method="post">
                <input type="text" name="fname" placeholder="enter your first name"><br>
                <input type="text" name="lname" placeholder="enter your last name"><br>
                <input type="email" name="email" placeholder="enter your e-main"><br>
                <textarea name="message" cols="30" rows="5" placeholder="your opinion matters.."></textarea><br><br>
                <button>send</button>
            </form>
        </div>
        <div class="icons">
        <a href=""><i class='bx bxl-facebook-square'></i></a><br>
        <a href=""><i class='bx bxl-linkedin-square'></i></a><br>
        <a href=""><i class='bx bxl-instagram-alt' ></i></a><br>
        </div>
        

    </div>
    
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('message');
        if (myParam){
            alert(myParam);
        }
    </script>
</body>
</html>