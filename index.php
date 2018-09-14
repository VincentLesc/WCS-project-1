<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WildCodeSchool</title>
    <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
    <!-- meta -->
    <meta name="wildcodeschool" content="">
    <meta name="Fleur Castel" content="">
    <!-- mon icon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<!-- Navbar -->

<?php require 'navbar.html'; ?>

<!-- Slider -->

<div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://via.placeholder.com/900x390" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>Become a web developer in 5 months</h2>
                <h3>Learn how to code and be ready to rule the world !</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/900x390" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>Choose your team !</h2>
                <h3>Which clan do you deserve to be in ?</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/900x390" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>Join Wild Code School !</h2>
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


<!-- Title & School presentation -->

<section id="homepresentation_section">
    <div class="container">
        <h1 class="sectiontitle"><strong>Welcome to Wild Code School !</strong></h1>
        <img class="home_image float-lg-left ml-lg-3 mr-lg-3" src="https://via.placeholder.com/400x400" alt="Home presentation" id="presentationimg">
        <p class="text-justify" id="presentationtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. <br/>
            Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. <br/>
            Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. <br/>
            Maecenas adipiscing ante non diam sodales hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. <br/>Pellentesque congue. Ut in risus volutpat libero pharetra tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.</p>
        <div class="text-center">
            <button id="button" type="button" class="btn btn-outline-dark btn btn-primary btn-lg"><a href="#">Contact us</a></button>
        </div>
        <h2 class="contact_text"><strong>You want to join Wild Code School army ?<br/>
                Click on the button above, fill in the informations<br/> and discover the joy of web development !</strong></h2>
    </div>
</section>
<?php require 'footer.html'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>