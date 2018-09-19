<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>DarkCodeSchool</title>
		<link rel="stylesheet" media="screen" type="text/css" href="./style.css"/>

		<!-- meta -->
		<meta name="wildcodeschool" content="">
		<meta name="Fleur Castel" content="">

		<!-- mon icon -->
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>

<body>

<!-- Navbar -->

	<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Dark Code School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav w-100 justify-content-end">
                    <a class="nav-item nav-link mr-5" href="#">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link mr-5" href="#">Instructors</a>
                    <a class="nav-item nav-link mr-5" href="#">Wilders</a>
                    <a class="nav-item nav-link mr-5" href="#">Euratechnologies</a>
                    <a class="nav-item nav-link mr-5" href="#">Guestbook</a>
                    <a class="nav-item nav-link mr-5" href="#">Contact</a>
                </div>
            </div>
        </nav>

<!-- Slider -->

<div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="" alt="First slide" height="550">
    <div class="carousel-caption d-none d-md-block">
    	<h3>On September 2018, the Wild Code School becomes the</h3>   
    	<h2>Dark Code School</h2>
  	</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/900x390" alt="Second slide">
    <div class="carousel-caption d-none d-md-block">
    	<h3>Learn to code in 5 months and become the best web developer !</h3>
  	</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/900x390" alt="Third slide">
     <div class="carousel-caption d-none d-md-block">
    	<h3>Join the code's Force !</h3>
  	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</header>

<!-- Title & School presentation -->

<section id="homepresentation_section">
  <h1 class="sectiontitle"><strong>Welcome to Dark Code School !</strong></h1>


		<img class="home_image float-lg-left ml-lg-3 mr-lg-3" src="https://via.placeholder.com/400x400" alt="Home presentation" id="presentationimg">
		<p class="text-justify mr-3" id="presentationtext">The school is based in Euratechnologies in Lille, a place where start-ups and big numeric companies stand together.
      It's the perfect place to learn web development ! And let's confess it, if you want to hack the spatial ship of your enemy, you have to be well surrounded, no ?!
      In a warm and friendly ambience which makes the reputation of the North people, come learn development web at the speed of light  (or at least, as fast as on bord of the best spatial ship of the universe).
      Then Lille, it's clearly the best city, we are the King of the North !
      ....
      Hmmmm, wait, it's not the same TV show, we haven't convinced yet Jon Snow to join the Force, we get back together promise !</p>


    <div class="text-center">
      <button id="button" type="button" class="btn btn-outline-dark btn btn-primary btn-lg">Contact us</button>
    </div>


		<h2 class="contact_text"><strong>You want to join Dark Code School's Force ?<br/>
    - Click on the button above<br/>
    - Let us a message<br/>
    - We will contact you for a meeting<br/>
    And soon, you'll be part of the Force too !</strong></h2>

</div>

</section>



<footer>
  <div class="container" id="footer">
    <div class="row justify-content-center p-4">
        <div class="col-10 col-md-5 col-offset-1">
            <h4 class="text-white">Pages</h4>
            <ul class="list-unstyled">
              <li><a href="" class="text-white">Home</a></li>
              <li><a href="" class="text-white">Instructors</a></li>
              <li><a href="" class="text-white">Wilders</a></li>
              <li><a href="" class="text-white">Euratechnologies</a></li>
              <li><a href="" class="text-white">Guestbook</a></li>
              <li><a href="" class="text-white">Contact</a></li>
            </ul>
        </div>
      <div class="col-10 col-md-5 col-offset-1">
        <h4 class="text-white">Address</h4>
        <address class="text-white">Dark Code School<br/>Euratechnologies<br/>
                        4 avenue des Saules, 59160 Lomme</address>
      </div>
    </div>
  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>


</html>