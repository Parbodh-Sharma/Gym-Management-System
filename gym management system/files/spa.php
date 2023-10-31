<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
      .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48 ;
        color:gold;
        
      }
      </style>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script> 
$(function(){
  $("#header").load("header.php"); 
  $("#footer").load("footer.php"); 
});
</script> 
</head>
<style>
   body{
    background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
    color: beige;
  }
    .heading{
        background-color: beige;
      height: 20vh;
      width: 100%;
    }
    .heading h1{
        position: absolute;
        top: 22%;
        margin-left: 15%;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
  color: midnightblue;
      }
    .about{
        margin-left: 15%;
        width: 45%;
        text-align: justify;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color: beige;
      margin-top: 5%;
      font-size: 16px;
    }
.about h2{
    color: beige;
}
.sidebar h4{
margin-left: -150px;
}
p{
  letter-spacing: 1px;
}
.sidebar{
  color: beige;
 position: absolute;
 left: 65%;
top: 51%;
}
.call b{
position: absolute;
left: 16%;
}
.mail b{
  position: absolute;
  left: 16%;
}
.loc b{
  position: absolute;
  left: 16%;
}
.sidebar{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  letter-spacing: 2px;
}
.sidebar a{
  text-decoration: none;
  color: beige;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
letter-spacing: 1px;
}
.sidebar a:hover{
  color: gold;
  text-decoration: none;
}
.about ul{
    list-style: circle;
  margin-left: 2%;
}
.about .pics{
    display: flex;
}
.about .pics .pic2{
    margin-left: 1%;
    border-radius: 6px;
}
.about .pics .pic1{
    border-radius: 6px;
}
</style>
<body>
    <div id="header"></div>
    <nav role="navigation" class="primary-navigation">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="">ABOUT US &dtrif;</a>
            <ul class="dropdown">
              <li><a href="aboutus.php" target="_blank">MUSCLE-FARM</a></li>
              <li><a href="vision&mission.php" target="_blank">VISION AND MISSION</a></li>
            </ul>
          </li>
          <li><a href="">CLASSES &dtrif;</a>
            <ul>
              <li><a href="aerobics.php" target="_blank">AEROBICS</a></li>
              <li><a href="bhangra.php" target="_blank">BHANGRA</a></li>
              <li><a href="bodysculpting.php" target="_blank">BODY SCULPTING</a></li>
              <li><a href="cardio.php" target="_blank">CARDIO</a></li>
              <li><a href="crossfit.php" target="_blank">CROSSFIT</a></li>
              <li><a href="fitnessstudio.php" target="_blank">FITNESS STUDIO</a></li>
              <li><a href="poweryoga.php" target="_blank">POWER YOGA</a></li>
              <li><a href="spinning.php" target="_blank">SPINNING</a></li>
            </ul>
          </li>
          <li><a href="dietcounseling.php">DIET COUNSELING</a></li>
          <li><a href="">HEALTH & FITNESS &dtrif;</a>
            <ul>
              <li><a href="workout.php" target="_blank">WORKOUT</a></li>
              <li><a href="nutrition.php" target="_blank">NUTRITION</a></li>
            </ul>
          </li>
          <li><a href="spa.php" target="_blank">SPA</a></li>
          <li><a href="swimming.php" target="_blank">SWIMMING</a></li>
          <li><a href="contactus.php" target="_blank">CONTACT US</a></li>
        </ul>
      </nav>
    <div class="heading">
        <h1><b>SPA</b><br>
        </h1>
    </div>
</div>
        <div class="about">
            <div class="pics">
            <img src="images/abbots-gardens-self-build-matt-clayton-025.jpg" alt="" width="350px" height="350px" class="pic1">
            <img src="images/n7b23iasbjfm4y3d6csa.webp" alt="" width="350px" height="350px" class="pic2">
            </div>
            <p>
                <br>
                Specialized spa services at Muscle-Farm is here to balance the stress of daily life in a big city like Phagwara. Simply slow down, turn off your phone and come in for a soothing massage that is meant to leave the world outside.
            </p>
         <p>
            <br>
            During your visit at this best fitness club located in Phagwara, we make sure you take pleasure of exclusive amenities including luxury locker rooms, steam rooms, saunas, fitness classes by professionals, and a lot more.
            </p>
          
<p>
    <br>
   <b> At Muscle-Farm</b>, we incorporate an array of aromas including:
</p>
<p>
  <br>
 <b> Rosemary Mint </b>– An invigorating aroma featuring certified organic rosemary, peppermint, lavender, and marjoram.
</p>
<p>
    <br>
  <b>  Shampure </b>– A soothing aroma featuring an exclusive bouquet of 25 pure flower and plant essences, including certified organic ylang-ylang, petitgrain, lavender, lemon, and bergamot.
</p>

<p>
    <br>
   <b> Beautifying</b> – An uplifting aroma featuring organic lavender, rosemary, and bergamot.
</p>
<p>
    <br>
    Join Muscle-Farm, the best fitness club in Phagwara, Punjab offering specialized spa services at inexpensive prices!
</p>
</div>
<div class="sidebar">
<b><h4>CONTACT</h4></b> 
Opposite Kamala Nehru College, <br>
Palahi Road, Phagwara, <br>
Punjab – 144401 
<hr>
<div class="call">
<span class="material-symbols-outlined">
  Call 
  </span>  <b><a href="tel:+91 7347660244">+91 7347660244</a></b>
  <br>
  </div>
  <div class="mail">
  <span class="material-symbols-outlined">
    mail
    </span>
<b><a href="mailto:parbodhsharma789@gmail.com"> Musclefarm786@gmail.com </a></b>
<br>
</div>
<div class="loc">
<span class="material-symbols-outlined">
  location_on
  </span>
<a href="#"> <b>Find us on the map </a></b><br>
</div>
</div>
<br><br>
<div id="footer"></div>

    
</body>
</html>