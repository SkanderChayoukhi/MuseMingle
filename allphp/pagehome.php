<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <link rel="stylesheet" href="../allcss/style1.css">
    <style>
        nav {
  position: fixed;
  top: 0;}
        .category {
            font-size: 14px;
            color: white;
            font-weight: bold;
        }
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

:root {
  /* Colors */
  --brand-color: rgb(164, 7, 7);
  --black: hsl(0, 0%, 0%);
  --white: hsl(0, 0%, 100%);
  /* Fonts */
  --font-title: "Montserrat", sans-serif;
  --font-text: "Lato", sans-serif;
}

/* RESET */

/* Box sizing rules */
*,
*::before,
*::after {
  box-sizing: border-box;
}

/* Remove default margin */
body,
h2,
p {
  margin: 0;
}

/* GLOBAL STYLES */
body {
  display: grid;
  place-items: center;
  height: 100vh;
}

h2 {
  font-size: 2.25rem;
  font-family: var(--font-title);
  color: var(--white);
  line-height: 1.1;
}

p {
  font-family: var(--font-text);
  font-size: 1rem;
  line-height: 1.5;
  color: var(--white);
}

.flow > * + * {
  margin-top: var(--flow-space, 1em);
}

/* CARD COMPONENT */

/* CARD COMPONENT */

.card {
  display: inline-block;
  width: 50vw;
  max-width: 15rem;
  height: 23rem;
  overflow: hidden;
  border-radius: 0.625rem;
  box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
  margin: 0.5rem;
  position: relative; /* Added position relative */
}

.card__background {
  object-fit: cover;
  max-width: 100%;
  height: 100%;
}

.card__content {
  --flow-space: 0.9375rem;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 70%;
  padding: 12% 1.25rem 1.875rem;
  background: linear-gradient(
    180deg,
    hsla(0, 0%, 0%, 0) 0%,
    hsla(0, 0%, 0%, 0.3) 10%,
    hsl(0, 0%, 0%) 100%
  );
  transition: transform 500ms ease-in; /* Transition added here */
  transform: translateY(100%); /* Initially translate down */
}

.card:hover .card__content {
  transform: translateY(0); /* Translate up on hover */
}

.card__content--container {
  --flow-space: 1.25rem;
}

.card__title {
  position: relative;
  width: fit-content;
  width: -moz-fit-content;
}

.card__title::after {
  content: "";
  position: absolute;
  height: 0.3125rem;
  width: calc(100% + 1.25rem);
  bottom: calc((1.25rem - 0.5rem) * -1);
  left: -1.25rem;
  background-color: var(--brand-color);
}

.card__button {
  padding: 0.75em 1.6em;
  width: fit-content;
  width: -moz-fit-content;
  font-variant: small-caps;
  font-weight: lighter;
  border-radius: 0.6em;
  border: none;
  background-color: var(--brand-color);
  font-family: var(--font-title);
  font-size: 1.1rem;
  color: var(--black);
}

.card__button:focus {
  outline: 2px solid black;
  outline-offset: -5px;
}
.see-more-button {
        background-color: darkred;
        padding: 10px 20px;
        margin-top: 20px; /* Adjust the margin-top to create space between the button and the cards */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1rem;}
    </style>
    
</head>
<body>
    <nav>
        <img src="../allphoto/logo.png" alt="">
        <div class="navigation">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="../allhtml/index2.html">Gallery</a></li>
                <li><a  href="">Contact us</a></li>
                <li><a  href="">games</a></li>
            </ul>
        </div>
    </nav>






    <!-----------------------into----------------------------->
<section class="intro">   
    <div class="container">
        <div class="slide">
            <div class="item" style="background-image: url(../allphoto/painting.jpg);">
                <div class="content">
                    <div class="name">Paintings</div>
                    <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div>
                  
                </div>
            </div>
            <div class="item" style="background-image: url(../allphoto/drawing.jpg);">
                <div class="content">
                    <div class="name">Drawings</div>
                    <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div>
        
                </div>
            </div>
            <div class="item" style="background-image: url(../allphoto/photography.jpg);">
                <div class="content">
                    <div class="name">Photography</div>
                    <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(../allphoto/artist.jpg);">
                <div class="content">
                    <div class="name">explore the artists</div>
                    <div class="descripton">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ab perferendis at, in qui similique quibusdam maxime aspernatur quam assumenda beatae sint modi ipsam molestiae accusamus necessitatibus id doloribus eaque.</div>
                    
                </div>
            </div>
        </div>
        <div class="button">
            <button class="prev"><i class='bx bx-left-arrow-alt'></i></button>
            <button class="next"><i class='bx bx-right-arrow-alt'></i></button>
        </div>
    </div>
</section>







<!-------------update---------------->
<div class="update">
</div>



<!--------------our collection-------->

<div style="justify-content: center;text-align: center;">
        <div class="category" id="photography" onclick="showContent('photography')" style="width: 70px; height: 70px; background-color: rgb(164, 7, 7); display: inline-flex; align-items: center; justify-content: center; cursor: pointer; text-align: center; line-height: 50px;">
            <i class="fa fa-camera" style="font-size: 24px; color: white;"></i>
        </div>
               
        <div class="category" id="painting" onclick="showContent('painting')" style="width: 70px; height: 70px; background-color: gray; display: inline-flex; align-items: center; justify-content: center; cursor: pointer; text-align: center; line-height: 50px;">
            <i class="fa fa-paint-brush" style="font-size: 24px; color: white;"></i>
        </div>
        <div class="category" id="drawings" onclick="showContent('drawings')" style="width: 70px; height: 70px; background-color: gray; display: inline-flex; align-items: center; justify-content: center; cursor: pointer; text-align: center; line-height: 50px;">
            <i class="fa fa-pencil" style="font-size: 24px; color: white;"></i>
        </div>

    <div id="whatsNew" style="text-align: center">
        <!-- Content for Photography -->
        <div id="photographyContent" style="display: inline-block;">
            <h2 style="color:gray">What's New in <span style="color: rgb(164, 7, 7);">Photography</span> </h2>
            <!-- Add your content for photography here -->
            <p>Content for Photography...</p>
            <article class="card">
                <img
                  class="card__background"
                  src="https://i.imgur.com/QYWAcXk.jpeg"
                  alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                  width="1700"
                  height="2000"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title">Colombia</h2>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                      labore laudantium deserunt fugiat numquam.
                    </p>
                  </div>
                  <button class="card__button">More details</button>
                </div>
              </article>
              <article class="card">
                <img
                  class="card__background"
                  src="https://i.imgur.com/QYWAcXk.jpeg"
                  alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                  width="1700"
                  height="2000"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title">Colombia</h2>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                      labore laudantium deserunt fugiat numquam.
                    </p>
                  </div>
                  <button class="card__button">More details</button>
                </div>
              </article>
              <br>
              <button class="see-more-button" >See More</button>
        </div>

        <!-- Content for Painting -->
        <div id="paintingContent" style="display: none;">
            <h2 style="color:gray">What's New in <span style="color: rgb(164, 7, 7);">Painting</span></h2>
            <p>painting content here</p>
            <article class="card">
                <img
                  class="card__background"
                  src="https://i.imgur.com/QYWAcXk.jpeg"
                  alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                  width="1700"
                  height="2000"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title">Colombia</h2>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                      labore laudantium deserunt fugiat numquam.
                    </p>
                  </div>
                  <button class="card__button">More details</button>
                </div>
              </article>
              <article class="card">
                <img
                  class="card__background"
                  src="https://i.imgur.com/QYWAcXk.jpeg"
                  alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                  width="1700"
                  height="2000"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title">Colombia</h2>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                      labore laudantium deserunt fugiat numquam.
                    </p>
                  </div>
                  <button class="card__button">More details</button>
                </div>
              </article>
              <br>
              <button class="see-more-button" >See More</button>
        </div>

        <!-- Content for Drawings -->
        <div id="drawingsContent" style="display: none;">
            <h2 style="color:gray">What's New in <span style="color: rgb(164, 7, 7);">Drawings</span></h2>
            <p>drawing content here</p>
            <article class="card">
                <img
                  class="card__background"
                  src="https://i.imgur.com/QYWAcXk.jpeg"
                  alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                  width="1700"
                  height="2000"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title">Colombia</h2>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                      labore laudantium deserunt fugiat numquam.
                    </p>
                  </div>
                  <button class="card__button">More details</button>
                </div>
              </article>
              <article class="card">
                <img
                  class="card__background"
                  src="https://i.imgur.com/QYWAcXk.jpeg"
                  alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                  width="1700"
                  height="2000"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title">Colombia</h2>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                      labore laudantium deserunt fugiat numquam.
                    </p>
                  </div>
                  <button class="card__button">More details</button>
                </div>
              </article>
              <br>
              <button class="see-more-button" >See More</button>
        </div>
    </div>

    <script>
        function showContent(category) {
            // Hide all content sections
            document.getElementById('photographyContent').style.display = 'none';
            document.getElementById('paintingContent').style.display = 'none';
            document.getElementById('drawingsContent').style.display = 'none';
            document.getElementById('drawings').style.backgroundColor = 'gray';
            document.getElementById('painting').style.backgroundColor = 'gray';
            document.getElementById('photography').style.backgroundColor = 'gray';

            // Show the selected content section
            document.getElementById(category + 'Content').style.display = 'block';

            // Change background color when clicked
            document.getElementById(category).style.backgroundColor = 'rgb(164, 7, 7)';
        }
    </script>


































<script src="../alljs/app.js"></script> 
<?php include "footer.php" ?>   
</body>
</html>