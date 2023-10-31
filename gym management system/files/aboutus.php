<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#header').load('header.php') ;
        }) ;
    </script>
    <script>
                $(function(){
            $('#footer').load('footer.php') ;
        }) ;
    </script>
    <style>
  body{
    /* background-color: rgb(8, 8, 55); */
    background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
    color: beige;
font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
  ul{
    list-style: none;
  }
.aboutus{
    margin-left: 10%;
    margin-top:3%;
    width: 55%;
    color: beige;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.aboutus p{
    font-size: 17px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.aboutus ul li{
    font-size: 17px;
    margin-left: 2%;
    list-style: none;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.links{
    margin-left: 70%;
    margin-top: -46%;
    font-size: 17px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.links b{
  color: wheat;
}
.links ul li a{
    color: beige;
}
.links ul li a:hover{
  color: goldenrod;
  text-decoration: none;
}
#footer{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
    <div class="aboutus">
        <h1>MUSCLE-FARM</h1>
        <br>
<p>
   <p><b> At Muscle-Farm</b>, our purpose is to provide every person the opportunity to live a fit and healthy good life. Our fitness club has been helping to transform the health and wellness of the ones every day.</p>
    <br>
  <p>  Muscle-Farm was primarily conceptualized keeping in mind the rationale behind a multi-specialty center concept. We integrate all the possible relaxation, exercises, and group exercise techniques, i.e., “gym, spa, yoga, and aerobics” centers – everything under a single roof.
</p>
    <br>
  <p>  Personal attention from insightful instructors, supportive peers, and zero attitude or ego is just the beginning of what you will find here.
    <br><br>
    We strongly believe…
    <br>
</p>
<br>
    <ul>
  <li> Strength comes from effort.</li>
     <li>   Inspiration can come from anywhere.</li>
       <li> Action displaces fear.</li>
      <li>  Fitness creates opportunity and freedom.</li>
       <li>  Training teaches sacrifice, courage, dedication, and perseverance.</li>
      <li>  How we handle small things shows how we will handle big things.</li>
      <li>  Life is easier when we are strong.</li>
      <li>  What we learn in life applies to the gym, and vice versa.</li>
  
    <br>
  <p>  Not ready for CrossFit? Try MUSCLE-FARM !  </p>
  <br>
  <p>  To find out more about our fitness programs in detail, feel free to give us a call at 9815160822 and we will certainly help you keep getting stronger! </p>
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
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div id="footer"></div>
</body>
</html>