<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Sculpting</title>
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
       height: 35px;
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
    top: 225%;
    left: 15%;
    cursor: pointer;
}
.button:hover{
    background-color: beige;
}
.tc{
    position: absolute;
    left: 23%;
    top: 226%;
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
        <h1>BODY SCULPTING  <br>
        </h1>
        <h4>CLASS</h4>
    </div>
    <div class="mid">
    <div class="pic">
        <img src="images/Body-Sculpting-Classes.jpeg" alt="">
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
            <h2><br> ABOUT THE BODY SCULPTING CLASSES </h2>
            <p>
                <br>
                Work on your key muscles and tone up your body in this enthusiastic Body Sculpting class structured for alternate days. Muscle-Farm is the best fitness club in Punjab that offers an exclusive strength-training class designed to help you one up and sculpt a leaner body. The class follows result-oriented approach and you will enjoy the variations it offers Kettlebell, Dumbbell, and ankle-weights.
            </p>
            <p><b><br>Body sculpting </b>(or core conditioning) is a non-aerobic, muscle-toning class, usually focused on core strength. Most sculpting classes use weight bars, exercise bands, or dumbbells, or a combination of these gadgets. You perform conventional weight training moves in a class setting.</p>
            <p><br>
                Body sculpting class at Muscle-Farm will help you gain strength, balance, flexibility, and endurance with the strategically planned floor and mat exercises combining an array of tools like Kettlebell, resistance bands, and balls. Furthermore, with new exercises done in every class, every member is addicted to it and looks forward to the class with renewed eagerness and zeal every week.
            </p>
            <br> Visit Muscle-Farm and experience the best Body Sculpting classes in Punjab !
            <br>
            <h3><br>OBJECTIVES</h3>
            <ul>
<br>
   <li> Enhances your metabolism</li>
 <li>   Works on your abdominal muscles too</li>
  <li>  Burns fat and calories</li>
 <li> Builds and sculpts muscles</li>
   <li> The best workout for abs and core muscles</li>
 <li>   Amazing workout with Ankle-weights and Kettlebell</li>
 <li>   Improves your strength and flexibility</li>
 <li>Enjoyment & excitement packed class</li>
</ul>
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