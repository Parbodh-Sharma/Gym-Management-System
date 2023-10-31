<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <div class="social-menu">
      <ul>
        <li><a href=""> <i class="fab fa-facebook"></i></a> </li>
        <li><a href=""> <i class="fab fa-instagram"></i></a> </li>
        <li><a href=""><i class="fab fa-twitter"> </i></a></li>
      </ul>
    </div>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  </header>
  <img src="images/GYM LOGO (1).png" width="120px " height="150px" alt="" class="logo">
  <div class="loading" data-loading-text="MUSCLEFARM"></div>
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
  <div id="slider">
    <div class="slides-container">
      <div class="slide"><img src="images/bigstock-203942065.webp" alt="Slider img 2" ></div>
      <div class="slide"><img src="images/BBB_0511.jpg" alt="Slider img 2" ></div>
        <div class="slide"><img src="images/slider1.webp" alt="Slider img 1" ></div>
        <div class="slide"><img src="images/slider2.jpg" alt="Slider img 2" ></div>

      
    </div>

    <div class="arrows">
        <a class="prev" href="#"><span class="glyphicon glyphicon-chevron-left"></span></i></a>
        <a class="next" href="#"> <span class="glyphicon glyphicon-chevron-right"></span</a>
    
    </div>
  
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
function dxSimpleSlider(element = '#dx-slider', auto = false, pause) {
    // Get parent element
    var $this = $(element);
    // Slides container
    var slidesCont = $this.children('.slides-container');
    // Get all slides
    var slides = slidesCont.children('.slide');

    // Get pager div
    var pager = $this.children('.pager');
    // Get Previous / Next links
    var arrowsCont = $this.children('.arrows');
    var prevSlide = arrowsCont.children('.prev');
    var nextSlide = arrowsCont.children('.next');
    // Total slides count
    var slidesCount = slides.length;
    // Set currentSlide to first child
    var currentSlide = slides.first();
    var currentSlideIndex = 1;
    var autoPlay = null;
    // Hide all slides except first and add active class to first
    slides.not(':first').css('display', 'none');
    currentSlide.addClass('active');
    // Function responsible for fading to next slide
    function fadeNext() {
        currentSlide.removeClass('active').fadeOut(700);
        if(currentSlideIndex == slidesCount) {
            currentSlide = slides.first();
            currentSlide.delay(500).addClass('active').fadeIn(700);
            currentSlideIndex = 1;
        } else {
            currentSlideIndex++;
            currentSlide = currentSlide.next();
            currentSlide.delay(500).addClass('active').fadeIn(700);
        }
        pager.text(currentSlideIndex+' / '+slidesCount);
    }

    // Function responsible for fading to previous slide
    function fadePrev() {
        currentSlide.removeClass('active').fadeOut(700);

        if(currentSlideIndex == 1) {
            currentSlide = slides.last();
            currentSlide.delay(500).addClass('active').fadeIn();
            currentSlideIndex = slidesCount;
        } else {
            currentSlideIndex--;
            currentSlide = currentSlide.prev();
            currentSlide.delay(500).addClass('active').fadeIn(700);
        }

        pager.text(currentSlideIndex+' / '+slidesCount);
    }

    // Function that starts the autoplay and resets it in case user navigated (clicked prev or next)
    function AutoPlay() {
        clearInterval(autoPlay);

        if(auto == true)
            autoPlay = setInterval(function() {fadeNext()}, pause);
    }

    // Detect if user clicked on arrow for next slide and fade next slide if it did
    $(nextSlide).click(function(e) {
        e.preventDefault();
        fadeNext();
        AutoPlay();
    });

    // Detect if user clicked on arrow for previous slide and fade previous slide if it did
    $(prevSlide).click(function(e) {
        e.preventDefault();
        fadePrev();
        AutoPlay();
    });

    // Start autoplay if auto is set to true
    AutoPlay();
}
$(function() {
    dxSimpleSlider('#slider', true, 8000);
});
</script>
<div class="join">
  <a href="contactus.php"><b>JOIN NOW </b></a>
</div>
<div class="container-fluid">
<div class="content">
<h1 style="color: white;">
  Professional Fitness Training<hr>
  </h1>
  <p style="color: white;"><br> No matter you’re new to working out or a fitness pro, at  <b>MUSCLE-FARM</b> , we are here to provide you an array of training options, guidance, and support to help you stay on track and reach your goals.</p>
</div>
<div class="wrapper">
<div class="card">
		<img src="images/sports-nutrition-fitness-equipment-sports-nutrition-supplements-healthy-food-dumbbells-black-background-fitness-112716854.jpg">
	<div class="info">
		<h1>Nutritional Advice</h1>
			<p>Let food be the medicine; the medicine shall be the food.
			</p>
    </div>
  </div>
	<div class="card">
		<img src="images/61zbJ0QDLVL._AC_SX466_.jpg">
		<div class="info">
		<h1>Open 24 hours</h1>
			<p>There are 24 hours in a day.Dedicate one of them to becoming a stronger,better version of yourself</p>
    </div>
  </div>
<div class="card">
		<img src="images/istockphoto-1311896046-170667a.jpg">
		<div class="info">
		<h1> Experienced Coach</h1>
			<p>Experienced  fitness coaches that can help you stay motivated even if you're having a tough day.</p>
    </div>
  </div>
  <div class="card">
		<img src="images/1.webp">
		<div class="info">
		<h1> Personal Training</h1>
			<p>You don't have to believe in yourself.Just believe in your personal trainer</p>
    </div>
  </div>
</div>
<div class="container">
  <h1>
   <i> TESTIMONIALS </i>
  </h1>
  <h4>
    What our client says
  </h4>
  <div class="row">
      <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
              <!-- Carousel Slides / Quotes -->
              <div class="carousel-inner text-center">
                  <!-- Quote 1 -->
                  <div class="item active">
                      <blockquote>
                          <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <p style="color: khaki;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                  <small style="color: wheat;">St.Lucia</small>
                              </div>
                          </div>
                      </blockquote>
                  </div>
                  <!-- Quote 2 -->
                  <div class="item">
                      <blockquote>
                          <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <p style="color: khaki;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                  <small style="color: wheat;">R.Taylor</small>
                              </div>
                          </div>
                      </blockquote>
                  </div>
                  <!-- Quote 3 -->
                  <div class="item">
                      <blockquote>
                          <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <p style="color: khaki;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                  <small style="color: wheat;">AJ Marie</small>
                              </div>
                          </div>
                      </blockquote>
                  </div>
              </div>
              <!-- Bottom Carousel Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/index.jpg" alt="">
                  </li>
                  <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/index1.jpg" alt="">
                  </li>
                  <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/team-square-1.jpg" alt="">
                  </li>
              </ol>

              <!-- Carousel Buttons Next/Prev -->
              <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
              <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript">
function BMI() {
  var h=document.getElementById('h').value;
  var w=document.getElementById('w').value;
  var bmi=w/(h/100*h/100);
  var bmio=(bmi.toFixed(2));

  document.getElementById("result").innerHTML="Your BMI is " + bmio;
}
</script>
<body>
<div class=bmi>
  <h2>BMI Calculator</h2>
  <p class="text">Height</p>
  <input type="text" id="h">
  <p class="text">Weight</p>
  <input type="text" id="w">
  <p id="result"></p>
  <button id="btn" onClick="BMI()">Calculate</button>
  <p id="info">Please enter height [cm] and weight [kg]</p>
</div>
<div class="container1"style="width:50%;">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/799457.webp" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/Gym-Status-and-Gym-Quotes-1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/sslider.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>
<footer class="footer">
  <div class="cont">
    <div class="row">
      <div class="footer-col">
        <h4>WHY TO CHOOSE MUSCLE-FARM?</h4>
    <p>
Muscle-Farm is one of the leading fitness clubs located in Phagwara, Punjab offering state of the art solutions for personal fitness and weight loss, both for men and women. Our mission is to introduce health and fitness into every individual’s life, and empower them to not only build a well-structured or sculpted body, but to create a positive self-image and feel confident from inside out.
        </p>
        </div>
        <div class="footer-col">
          <h4 class="aboutus">ABOUT US</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Muscle-Farm</a></li>
            <li><a href="">Vision & Mission</a></li> 
            <li><a href="">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4 class="link">
            USEFUL LINKS
          </h4>
          <ul>
            <li><a href="">Classes</a></li>
            <li><a href="">Diet Counseling</a></li>
            <li><a href="">Workout</a></li>
            <li><a href="">Nutrition</a></li>
            <li><a href="">Spa</a></li>
            <li><a href="">Swimming</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>CONTACT</h4>
        <P style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">  Opposite Kamala Nehru College, <br>
Palahi Road, Phagwara, <br>
Punjab – 144401 <br>
</P>
          <div class="social-links">
            <br>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
        <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
        </div>
      </div>
    
  </div>
 </footer> 
</body>
</html>