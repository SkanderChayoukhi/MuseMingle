

<?php
$conn=mysqli_connect("localhost","root","","musemingle");
if(!$conn){
    echo 'connection error!! :'. mysqli_connect_error();
}
$sql1='SELECT url_image,title FROM paintings';
$sql2='SELECT url_image,title FROM drawings';
$sql3='SELECT url_image,title FROM photography';
$result1=mysqli_query($conn, $sql1);
$result2=mysqli_query($conn, $sql2);
$result3=mysqli_query($conn, $sql3);
$paintings=mysqli_fetch_all($result1,MYSQLI_ASSOC );
$drawings=mysqli_fetch_all($result2,MYSQLI_ASSOC );
$photography=mysqli_fetch_all($result3,MYSQLI_ASSOC );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../allcss/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
<style>
    .update{
    height: 100vh;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'poppins', sans-serif ;
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
    font-family: sans-serif;
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





/*----------------------------------video-background------------------------*/
.acceuil{
    width: 100%;
    height: 100vh;
}
.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
@media(min-aspect-ratio: 16/9){
    .back-video{
        width: 100%;
        height: auto;
    }
}
@media(max-aspect-ratio: 16/9){
    .back-video{
        width: auto;
        height: 100%;
    }
}
.content0{
    text-align: center;
    padding-top: 170px;
}
.content0 a{
    font-size: 170px;
    font-weight: 600;
    border: none;
    transition: 1s ease;
    text-decoration: none;
    font-family: Protest Revolution;
    color:  rgb(164, 7, 7);
}
.content0 h2{
  font-size: 50px;
  font-weight: 600;
  color: #fff;
}
.wrapper {
    height: 10vh;
    /*This part is important for centering*/
    display: grid;
    place-items: center;
    padding-top: 50px;
    
  }
  
  .typing-demo {
    width: 40ch;
    animation: typing 3.5s steps(40, end) 2s infinite, blink 3s step-end infinite;
    animation-delay: 1s;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid;
    font-family: monospace;
    font-size: 2em;
    color: #fff;
    font-size: 50px;
    font-weight: 600;
  }
  .wrapper .typing-demo span{
    font-size: 70px;
    font-weight: 600;
    -webkit-text-stroke: 3px #fff;
    color: transparent;
  }
  
  @keyframes typing {
    from {
      width: 0
    }
  }
      
  @keyframes blink {
    50% {
      border-color: transparent
    }
  }





/*-----------------------------------1st section---------------------------------*/
.title{
    text-align: center;
    font-family: Protest Revolution;
    font-size: 30px;
    color: rgb(164, 7, 7);
    margin-top: 80px;
}
.collections{
    display: flex;
    justify-content: space-evenly;
    margin: 80px;
    padding: 20px;
    border-top: 2px solid black;
    border-bottom: 2px solid black
}
.collection{
    text-align: center;
}
.collection h2{
    color: black;
    letter-spacing: 2.5px;
}
.collections a{
    text-decoration: none;
    transition: 1s ease;
}
.collection span{
    color: black;
    font-size: 35px;
}
.collection a:hover{
    scale: 110%;
}









/*-----------------------------------2st section---------------------------------*/
.title1{
    text-align: center;
    font-family: Protest Revolution;
    font-size: 30px;
    margin-bottom: 80px;
    color: rgb(164, 7, 7);
}
.title2{
    text-align: center;
    font-family: Protest Revolution;
    font-size: 30px;
    margin-top: 45vh;
    color: rgb(164, 7, 7);
}
@import url("https://fonts.googleapis.com/css2?family=Figtree&display=swap");
.NEW {
	display: grid;
	place-content: center;
    margin-bottom: 70px;
}

.container1 {
	position: relative;
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
	gap: 1em;
	width: 800px;
	height: 500px;
	transition: all 400ms;
}

.container1:hover .box {
	filter: grayscale(100%) opacity(24%);
}

.box {
	position: relative;
	background: var(--img) center center;
	background-size: cover;
	transition: all 400ms;
	display: flex;
	justify-content: center;
	align-items: center;
}

.container1 .box:hover {
	filter: grayscale(0%) opacity(100%);
}

.container1:has(.box-1:hover) {
	grid-template-columns: 3fr 1fr 1fr 1fr 1fr;
}

.container1:has(.box-2:hover) {
	grid-template-columns: 1fr 3fr 1fr 1fr 1fr;
}

.container1:has(.box-3:hover) {
	grid-template-columns: 1fr 1fr 3fr 1fr 1fr;
}

.container1:has(.box-4:hover) {
	grid-template-columns: 1fr 1fr 1fr 3fr 1fr;
}

.container1:has(.box-5:hover) {
	grid-template-columns: 1fr 1fr 1fr 1fr 3fr;
}

.box:nth-child(odd) {
	transform: translateY(-16px);
}

.box:nth-child(even) {
	transform: translateY(16px);
}

.box::after {
	content: attr(data-text);
	position: absolute;
	bottom: 20px;
	background: #000;
	color: #fff;
	padding: 10px 10px 10px 14px;
	letter-spacing: 4px;
	text-transform: uppercase;
	transform: translateY(60px);
	opacity: 0;
	transition: all 400ms;
}

.box:hover::after {
	transform: translateY(0);
	opacity: 1;
	transition-delay: 400ms;
}




/*-----------------------------------3rd section---------------------------------*/
.container{
    position: absolute;
    top: 328%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 1000px;
    height: 600px;
    background: #f5f5f5;
    box-shadow: 0 30px 50px #dbdbdb;
}
.container .slide0 .item{
    width: 200px;
    height: 300px;
    position: absolute;
    top: 50%;
    transform: translate(0,-50%);
    border-radius: 20px;
    box-shadow: 0 30px 50px #505050;
    background-position: 50% 50%;
    background-size: cover;
    display: inline-block;
    transition: 0.5s;
}
.slide0 .item:nth-child(1){
    top: 0;
    left: 0;
    transform: translate(0,0);
    border-radius: 0;
    width: 100%;
    height: 100%;
}
.slide0 .item:nth-child(2){
    left:50%;
}
.slide0 .item:nth-child(3){
    left:calc(50% + 220px) ;
}
.slide0 .item:nth-child(4){
    left:calc(50% + 440px) ;
}

.item .content{
    position: absolute;
    top: 50%;
    right: 350px;
    width: 300px;
    text-align: left;
    color: #eee;
    transform: translate(0,-50%);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    display: none;
}
.slide0 .item:nth-child(2) .content{
    display: block;
}
.content .name{
    font-size: 40px;
    text-transform: uppercase;
    font-weight: bold;
    opacity: 0;
    animation: animate 1s ease-in-out 1 forwards;

}
.content .description{
    margin-top: 10px;
    margin-bottom: 20px;
    opacity: 0;
    animation: animate 1s ease-in-out 0.3s 1 forwards;

}
@keyframes animate{
    from{
        opacity: 0;
        transform: translate(0,100px);
        filter: blur(33px);
    }
    to{
        opacity: 1;
        transform: translate(0);
        filter: blur(0);
    }
}
.button{
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
}
.button button{
    width: 40px;
    height: 35px;
    border-radius: 20px;
    background: white;
    border: 1px solid white;
    cursor: pointer;
    color: black;
    margin: 0 5px;
    transition: 1s;
}
.button button:hover{
    color: white;
    background-color: transparent;
}
</style>
</head>
<body>
    <nav id="navbar" class="navbar" style="top: 0px; transition: top 0.6s ease-in-out 0s;">
        <a href="../allphp/home.php">
            <img src="../allphoto/logo.png" alt="">
        </a>
        <div class="navigation">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="./gallerypage.php">Gallery</a></li>
                <li><a  href="./contact.php">Contact us</a></li>
                <li><a  href="../games-phpuser/jeux.html">Games</a></li>
                <li><a  href="../login&register/login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="acceuil">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="../allvideo/video.mp4" type="video/mp4">
        </video>
        <div class="content0">
            <h2>Welcome to</h2>
            <a href="#">MuseMingle</a>
        </div>
        <div class="wrapper">
            <div class="typing-demo">
                "where <span>ART</span> and <span>community</span> connect"    
            </div>
        </div>
    </div>
    




<!-----------------------------------1st section--------------------------------->
<div class="title">
    <h1>OUR COLLECTION</h1>
</div>
<div style='cursor:pointer' class="collections" style="margin-bottom: 100px;margin-top: 60px;">
    <a class="paintings"><div class="collection">
            <span class="material-symbols-outlined">
                palette
            </span>
            <h2>Paintings</h2>
    </div></a>
    <a class="drawings"><div class="collection">
        
            <span class="material-symbols-outlined">
                draw
                </span>
            <h2>drawings</h2>
    </div></a>
    <a class="photography"><div class="collection">
            <span class="material-symbols-outlined">
                photo_camera
                </span>
            <h2>photography</h2>
    </div></a>
</div>




<!-----------------------------------2nd section--------------------------------->
<div class="title1">
    <h1>WHAT'S NEW !</h1>
</div>
<div class="NEW" style="margin-bottom: 120px;">
    <div class="container1">
        <div class="box box-1" style="background-image: url(<?php echo htmlspecialchars($paintings[0]['url_image'])?>);background-position: center;" data-text="<?php echo htmlspecialchars($paintings[0]['title'])?>"></div>
        <div class="box box-2" style="background-image: url(<?php echo htmlspecialchars($paintings[1]['url_image'])?>);background-position: center;" data-text="<?php echo htmlspecialchars($paintings[1]['title'])?>"></div>
        <div class="box box-3" style="background-image: url(<?php echo htmlspecialchars($paintings[2]['url_image'])?>);background-position: center;" data-text="<?php echo htmlspecialchars($paintings[2]['title'])?>"></div>
        <div class="box box-4" style="background-image: url(<?php echo htmlspecialchars($paintings[3]['url_image'])?>);background-position: center;" data-text="<?php echo htmlspecialchars($paintings[3]['title'])?>"></div>
        <div class="box box-5" style="background-image: url(<?php echo htmlspecialchars($paintings[4]['url_image'])?>);background-position: center;" data-text="<?php echo htmlspecialchars($paintings[4]['title'])?>"></div>
    </div> 
</div>
<script>
    let photography=document.querySelector('.photography');
    let drawings=document.querySelector('.drawings');
    let paintings=document.querySelector('.paintings');
    photography.addEventListener('click',()=>{
        let box1=document.querySelector('.box-1');
        let box2=document.querySelector('.box-2'); 
        let box3=document.querySelector('.box-3'); 
        let box4=document.querySelector('.box-4'); 
        let box5=document.querySelector('.box-5'); 
        box1.style.backgroundImage="url(<?php echo htmlspecialchars($photography[0]['url_image'])?>)";
        box2.style.backgroundImage="url(<?php echo htmlspecialchars($photography[1]['url_image'])?>)";
        box3.style.backgroundImage="url(<?php echo htmlspecialchars($photography[2]['url_image'])?>)";
        box4.style.backgroundImage="url(<?php echo htmlspecialchars($photography[3]['url_image'])?>)";
        box5.style.backgroundImage="url(<?php echo htmlspecialchars($photography[4]['url_image'])?>)";
    })
    paintings.addEventListener('click',()=>{
        let box1=document.querySelector('.box-1');
        let box2=document.querySelector('.box-2'); 
        let box3=document.querySelector('.box-3'); 
        let box4=document.querySelector('.box-4'); 
        let box5=document.querySelector('.box-5'); 
        box1.style.backgroundImage="url(<?php echo htmlspecialchars($paintings[0]['url_image'])?>)";
        box2.style.backgroundImage="url(<?php echo htmlspecialchars($paintings[1]['url_image'])?>)";
        box3.style.backgroundImage="url(<?php echo htmlspecialchars($paintings[2]['url_image'])?>)";
        box4.style.backgroundImage="url(<?php echo htmlspecialchars($paintings[3]['url_image'])?>)";
        box5.style.backgroundImage="url(<?php echo htmlspecialchars($paintings[4]['url_image'])?>)";
    })
    drawings.addEventListener('click',()=>{
        let box1=document.querySelector('.box-1');
        let box2=document.querySelector('.box-2'); 
        let box3=document.querySelector('.box-3'); 
        let box4=document.querySelector('.box-4'); 
        let box5=document.querySelector('.box-5'); 
        box1.style.backgroundImage="url(<?php echo htmlspecialchars($drawings[0]['url_image'])?>)";
        box2.style.backgroundImage="url(<?php echo htmlspecialchars($drawings[1]['url_image'])?>)";
        box3.style.backgroundImage="url(<?php echo htmlspecialchars($drawings[2]['url_image'])?>)";
        box4.style.backgroundImage="url(<?php echo htmlspecialchars($drawings[3]['url_image'])?>)";
        box5.style.backgroundImage="url(<?php echo htmlspecialchars($drawings[4]['url_image'])?>)";
    })
</script>




<!-----------------------------------3rd section--------------------------------->
<div class="title2">
    <h1>ABOUT US</h1>
</div>
<div class="update">
<section class="intro">   
        <div class="container">
            <div class="slide0">
                <div class="item" style="background-image: url(../allphoto/painting.jpg);">
                    <div class="content">
                        <div class="name">Photography</div>
                        <!-- <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div> -->
                      
                    </div>
                </div>
                <div class="item" style="background-image: url(../allphoto/artist.jpg);">
                    <div class="content">
                        <div class="name">explore the arts</div>
                        <!-- <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div> -->
                        
                    </div>
                </div>
                <div class="item" style="background-image: url(../allphoto/drawing.jpg);">
                    <div class="content">
                        <div class="name">Paintings</div>
                        <!-- <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div> -->
            
                    </div>
                </div>
                <div class="item" style="background-image: url(../allphoto/photography.jpg);">
                    <div class="content">
                        <div class="name">Drawings</div>
                        <!-- <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div> -->
                        
                    </div>
                </div>
            </div>
            <div class="button">
                <button class="next"><i class='bx bx-left-arrow-alt'></i></button>
                <button class="prev"><i class='bx bx-right-arrow-alt'></i></button>
            </div>
        </div>
    </section>
    </div>
    <script>
        let next= document.querySelector('.next')
let prev= document.querySelector('.prev')

prev.addEventListener('click', function(){
    let items=document.querySelectorAll('.item')
    document.querySelector('.slide0').appendChild(items[0])
})
next.addEventListener('click', function(){
    let items=document.querySelectorAll('.item')
    document.querySelector('.slide0').prepend(items[items.length - 1])
})
let prevScrollPos = window.pageYOffset;

window.onscroll = function() {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
// Scrolling up, show the navbar
         document.getElementById("navbar").style.top = "0";
    } else {
// Scrolling down, hide the navbar
          document.getElementById("navbar").style.top = `-${document.getElementById("navbar").offsetHeight}px`;
    }

    prevScrollPos = currentScrollPos;
};

    </script>







<!-----------------------------------footer--------------------------------->
<?php include ('footer.php');
?>



</body>
</html>