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
        <h1><b>SWIMMING</b><br>
        </h1>
    </div>
</div>
        <div class="about">
            <div class="pics">
            <img src="images/Buxton_Swimming_and_Fitness_0011.webp" alt="" width="350px" height="350px" class="pic1">
            <img src="images/swimming-pool-above.avif" alt="" width="350px" height="350px" class="pic2">
            </div>
            <p>
                <br>
                At Muscle-Farm, which is rated at the best fitness club in Phagwara, offers swimming pool services along with an array of other services including cardio, spinning, body sculpting, power yoga, aerobics, Pilates, strength training, and a lot more.
            </p>
         <p>
            <br>
            Swimming is the ideal match for you if you don’t love working up a sweat but do love the benefits of a cardio workout. The water keeps you cool, even as your heart gets a great workout. You’ll probably be able to keep yourself going for a longer time than if you were running. That’s because it is pleasurable and calm on your joints and muscles.
            </p>
          
<p>
    <br>
    The team of professionally experienced trainers we have always recommend to plan on doing 2 ½ hours of swimming every week, or combine it with other cardio workouts. You can set your own pace, going as fast as you like. Most people swim laps in the pool. If you swim in a lake or ocean, make sure you know how to stay safe in the open water with currents.
</p>
<p>
  <br>
 <b> Swimming </b> is just about as good as it gets for a complete workout. If you are pregnant, the buoyancy of the water will take stress off your joints. If you swam before you become pregnant, you will likely be able to continue swimming unless you have an issue with your pregnancy. It is a great aerobic workout for the ones with arthritis.
</p>
<p>
    <br>
  According to our highly skilled trainers at Latitude One – The Gym, swimming is one of the wonderful choices if you have low back pain. Warm water can be really soothing. Moreover, if you have diabetes, an aerobic activity like swimming can be an essential part of your diabetes treatment plan. It will certainly help you burn calories, lose weight, and keep your blood sugars under control.
</p>
<p>
    <br>
    Join Muscle-Farm, the best fitness club in Phagwara, Punjab offering the <b>biggest Swimming Pool! </b>
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