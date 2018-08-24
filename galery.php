<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Exo:100);
* {margin: 0; padding: 0; border: 0 none;}
html, body {height: 100%; width: 100%; font-size: 1rem; font-family: 'Exo', sans-serif; font-weight: 100;}
.cont-slider {
    position: relative;
    height: 100vh;
    max-height: 100vh;
    width: auto;
    min-width: 100vw;
    margin: 0 auto;
    overflow: hidden;
}
.slider {
    animation: sliding 25s ease-out 0s backwards infinite;
    position: absolute;
    left: 0;
    top: 0;
    width: 500%;
    height: 100%;
}
.slide {
    display: inline-block;
    position: relative;
    width: 20%;
    height: 100%;    
    background-attachment: fixed;
    background-position: center center;
    background-size: cover;
}
.slide span {
    background: rgba(0, 0, 0, 0.3);
    border-radius: 0 5vh 5vh 0;
    color: #FFF;
    position: absolute;
    left: 0;
    top: 40vh;
    font-size: 20vh;
    line-height: 20vh;
    border: 1px solid rgba(255,255,255,.45);
    border-left: 0 none;
}
.one {
  background-image: url(images/8.jpg);}
.two {
  background-image: url(images/9.jpg);}
.three {
  background-image: url(images/10.jpg);}
.four {
  background-image: url(images/11.jpg);}
.five {
  background-image: url(images/12.jpg);}

@keyframes sliding {
  0% {left: 0%; }
  15% {left: 0%; }
  20% {left: -100%; }
  35% {left: -100%; }
  40% {left: -200%; }  
  55% {left: -200%; }
  60% {left: -300%; }
  75% {left: -300%; }
  80% {left: -400%; }
  95% {left: -400%; }   
  100% {left: 0; }
}
</style>
<body>
<header class="cont-slider">
    <section class="slider">
      <article class="slide one"><span>One</span></article>
      <article class="slide two"><span>< Two</span></article>
      <article class="slide three"><span> Three</span></article>
      <article class="slide four"><span>Four</span></article>
       <article class="slide five"><span>Five</span></article>
    </section>
</header>
</body>
</html>