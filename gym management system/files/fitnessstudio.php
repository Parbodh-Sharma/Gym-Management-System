<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FITNESS STUDIO</title>
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
        top: 20%;
        margin-left: 15%;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
  color: midnightblue;
      }
        .heading h4{
color: midnightblue;
        position: absolute;
        top: 27%;
        margin-left: 15%;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        
    }
    .pic{
        margin-left: 15%;
        margin-top: 2%;
    }
    .mid{
        display: flex;
    }
    .timetable{
      color: beige;
        margin-top: 40px;
        margin-left: 50px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .timetable ul li{
        font-size: 14px;
        list-style: none;
        font-family:Arial, Helvetica, sans-serif;
       height: 33px;
    }
    .timetable pre{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .about{
        margin-left: 15%;
        width: 45%;
        text-align: justify;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color: beige;
    }
.about h2{
    color: beige;
}

.name{
    width: 49%;
    height: 30px;
    color: black;
}
.mno{
    width: 49.4%;
    height: 30px;
    color: black;
}
.mail{
    width: 49%;
    height: 30px;
    color: black;
}
.phn{
    width: 49.4%;
    height: 30px;
    color: black;
}
.button{
    background-color: rgb(29, 148, 208);
    color: black;
    padding: 6px 12px ;
    border-radius: 6px;
    position: absolute;
    top: 197%;
    left: 15%;
    cursor: pointer;
}
.button:hover{
    background-color: beige;
}
.tc{
    position: absolute;
    left: 23%;
    top: 198%;
}
ul{
  list-style: none;
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
        <h1>FITNESS STUDIO  <br>
        </h1>
        <h4>CLASS</h4>
    </div>
    <div class="mid">
    <div class="pic">
        <img src="images/Fitness-Studio.jpeg" alt="" height="350px" width="695px">
    </div>
   
   
    <div class="timetable">
        <b>Class Details</b>
       <br> <br>
        Class Schedule 

<ul>
    <br>
<li> 
      <pre>Monday                        5:00 am - 10:00 pm 


</pre>
       </li> 
    <li><pre>Tuesday                        5:00 am - 10:00 pm 

    </pre>
        </li>
   <li><pre>Wednesday                  5:00 am - 10:00 pm 

   </pre> 
       </li> 
       <li><pre>Thursday                      5:00 am - 10:00 pm 

       </pre> 
       </li> 
       <li><pre>Friday                           5:00 am - 10:00 pm 

       </pre> 
       </li> 
       <li><pre>Saturday                      5:00 am - 10:00 pm 
        
       </pre> 
       </li> 
        </ul>
    </div>
</div>
        <div class="about">
            <h2><br> ABOUT THE FITNESS STUDIO CLASSES </h2>
            <p>
                <br>
                We offer result-based personal training and expert nutrition coaching for complete body health and wellness. We are not a cult and we don’t do gimmicks – just old-school training and techniques that work.
            </p>
         <p>
            <br>
            You can think of personal training like our secret sauce – it’s the fastest and safest way to get seriously awesome results. Our experienced trainers develop fun individualized fitness programs that incorporate cutting-edge exercises and nutrition to help you crush your fitness goals.
         </p>
<p>
    <br>
    The trainers at Muscle-Farm are a cut above the competition. Their vast knowledge underpinned by years of experience working with a diverse clientele, as well as pushing athletic boundaries in their own right. With their help, you’ll achieve more than you ever dreamed possible.
</p>
<p>
    <br>
    Our personal trainers help you determine, set and achieve your individual goals – whether it’s building muscle, losing weight or just trying to live a healthier life. They create a program exclusively for your needs. They offer support and advice on issues like fitness, nutrition, and overall personal wellness.
</p>
<p>
    <br>
    Fitness Studio at Muscle-Farm offers a personalized, organic approach to your body, health, and goals. Regardless of your fitness level, you will be galvanized and inspired by our professional trainers offering specialized personal training sessions.
</p>
            <h2><br><br> BOOK THIS CLASS NOW  </h2>
            <p>Come along and join this great class at the gym</p>
            <br>
            <form action="connect1.php"  method="post">
<input type="text" placeholder="Your name..." class="name" name="name"> <input type="text"  id="" placeholder="Your Membership Number..." class="mno" name="mno">
            <br><br>
            <input type="email" class="mail" placeholder="Your email..." name="mail"> <input type="tel"  class="phn" placeholder="Your Phone..." name="phone"> 
<input type="submit" value="BOOK NOW" class="button"  name="submit_form"> 
</form>
            <p class="tc">I've read and I accept with the Terms & Conditions</p>
            </div>
            <br><br><br><br><br>
<div id="footer"></div>

    
</body>
</html>