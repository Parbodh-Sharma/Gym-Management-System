<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrossFit</title>
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
    top: 233%;
    left: 15%;
    cursor: pointer;
}
.button:hover{
    background-color: beige;
}
.tc{
    position: absolute;
    left: 23%;
    top: 234%;
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
        <h1>CROSSFIT  <br>
        </h1>
        <h4>CLASS</h4>
    </div>
    <div class="mid">
    <div class="pic">
        <img src="images/6-highintensity-1536x1024.jpg" alt="" height="350px" width="695px">
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
            <h2><br> ABOUT THE CROSSFIT CLASSES </h2>
            <p>
                <br>
                CrossFit is one of the categories of strength and conditioning workout that makes use of the weight of an individual’s body for resistance so as to build power throughout. Consistent with the advantages of high-intensity interval training, this means no standard cardio workouts and hours spent at the gym. The professional CrossFit trainers at Muscle-Farm  point out the following benefits and key reasons for the popularity of CrossFit workouts:
            </p>
         
<ul>
    <br>
  <li>  HIIT workouts can be done quickly – under an hour and sometimes much less – and don’t require someone to work out every single day to maintain strength.</li>
   <li> Doing HIIT workouts and training at high intensities – meaning workouts that would be unsustainable for long periods of time – leads to many health benefits, including fasterli
 weight loss along with more fat-burning and muscle-building.</li>
  <li>  Endurance athletes and bodybuilders are usually very specialized in their sport – for instance, being aerobically fit or very muscular – but can be lacking in versatility like having allover strength, power or stamina.</li>
  <li>  Sprinters and people conditioned to do Burst Training are typically proficient to match the cardiovascular benefits and abilities of endurance athletes, but with less time spent training.</li>
  <li>  Heavy lifters are able to apply more power to activities than endurance athletes. Powerlifters – those who attempt to lift maximum weights within three attempts – especially strong.</li>
</ul>
  <p><br>CrossFit workouts at <b>Muscle-Farm</b>, cover multiple fitness domains such as accuracy, balance, agility, coordination, speed, power, flexibility, strength, stamina, cardiovascular, and respiratory.</p>


            <h3><br>Benefits of CrossFit workouts at Muscle-Farm</h3>
            <ul>
<br>
   <li> Helps you work out more consistently</li>
 <li>   Ongoing motivation and a solid support system</li>
  <li>Less time spent working out, but more results</li>
 <li> Help losing weight fast</li>
   <li> Boost motivation, encouragement and instruction</li>
 <li>   The ability to beat through plateaus</li>
 <li>  Burn more fat than steady-state cardio</li>
 <li>Better conditioning and versatility</li>
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