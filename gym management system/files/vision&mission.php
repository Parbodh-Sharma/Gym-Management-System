<html>
<head>
<title></title>
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
<style>
  body{
    background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
  }
  .vision{
    width:55% ;
    margin-left: 10%;
    margin-top:3%;
  }
  .vision p{
    font-size: 18px;
    letter-spacing: 1px;
    color: beige;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: justify;
  }
  .mission{
    width:55% ;
    margin-left: 10%;
    margin-top:3%;
    color: beige;
  }
  .mission p{
    font-size: 18px;
    color: beige;
    letter-spacing: 1px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: justify;
  }
  .mission ul li{
    font-size: 18px;
    letter-spacing: 1px;
    color: beige;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
    text-align: justify;
  }
  #footer{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  .links{
    margin-left: 70%;
    margin-top: -43%;
    position:absolute;
  }
  
  .links ul li{
    font-size: 18px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
    color: beige;
  }
  .links b{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
    font-size: 18px;
    color: beige;
  }
  .links ul li a{
    color: beige;
  }
  ul{
    list-style: none;
  }
  .links ul li a:hover{
  color: goldenrod;
  text-decoration: none;
}
</style>
</head>
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
  <div class="vision">
    <p>
      <br><br><br>
Muscle-Farm envisions being the best gym in Phagwara and the most trusted high-tech fitness destination in Punjab offering all-inclusive services for fitness training and body toning. It evolved with the idea of being at the forefront of innovations in fitness training, exercising, methodology, and relaxation. It holds the vision of inspiring great workouts and deep-gratification through complete relaxation, all under a single roof.
</p>
</div>
<div class="mission">
<h1><b>MISSION</b></h1>
<br>
<p>
The first and foremost mission of Muscle-Farm has been to be the leading destination in Phagwara, Punjab – a goal that has been accomplished every year since it’s commencement through commitment and disciplined mindset. In changing times when people see fitness as a state of mind more than just a condition of the body, we aim to:
</p>
    <p><br>
      <ul><li> Offer high-performance training space and facility to fitness-conscious people across all age-groups. </li>
   <li> Pay back to the society in the form on healthy initiatives that add more life to the lifestyle of people.</li>
<li>    Continuously educate and train its Fitness Expert team and keeping them abreast with global trends in the industry.</li>
   <li> Be the splashy and flashy fitness destination by adding the elements of fun, passion and innovation to personal training and group classes.</li>
  <li>  Revolutionize the way “fitness” is perceived by working on need-specific and client-specific fitness solution.</li>
  </p>
</div>
<div class="links">
  <b>  USEFUL LINKS </b>
    <ul>
      <br>
        <li><a href="">Classes</a></li>
        <li><a href="">Diet Counselling</a></li>
        <li><a href="">Workout</a></li>
        <li><a href="">Nutrition</a></li>
        <li><a href="">Spa</a></li>
        <li><a href="">Swimming</a></li>
    </ul>
</div>
<br><br>
<div id="footer"></div>
</body>
</html>
