<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="wildcodeschool" content="">
    <meta name="Fleur Castel" content="">
    <title>DarkCodeSchool</title>

    <link rel="stylesheet" media="screen" type="text/css" href="CSS/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- mon icon -->
    <link rel="shortcut icon" href="Images/favicon.ico">
</head>
<body>

<!--  Navbar -->
<?php require '../src/navbar.html'; ?>

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel" data-ride="carousel" id="carousel_homepage">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="Images/index/SLIDE1.png" alt="First slide" height="700">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Images/index/SLIDE2.png" alt="Second slide" height="700">
            <div class="carousel-caption d-none d-md-block">
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
<section id="home_presentation_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="sectiontitle" id="titleDCS">Welcome to Dark Code School !</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img class="home_image" src="Images/index/logoWildHomePage.png" alt="Home presentation" id="presentationimg">
            </div>
            <div class="col-lg-8">
                <p class="text-justify" id="presentationtext">The school is based in <strong>Euratechnologies</strong> in <strong>Lille</strong>, a place where start-ups and big companies stand together.<br/>
                    It's the best place to learn web development ! And let's confess it, if you want to hack the spatial ship of your ennemy, it's better to be well surrounded, no ?!<br/>
                    In a <strong>warm</strong> and <strong>friendly</strong> ambience which makes the reputation of the North people, come learn web development at the speed of light (or at least, as fast as on bord of the galaxy's best spatial ship).<br/>
                    And Lille, it's clearly the best city ever, we are <strong>the King of the North !</strong><br/>
                    ...<br/>
                    Hmmm, wait, we haven't convinced yet Jon Snow to join the Force, let's pull ourselves together, shall we ?<br/>
                    <strong>Let's take a look at our beautiful little button right under.</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="../src/form.php"><button id="home_page_button" type="button" class="btn btn-outline-dark btn btn-primary btn-lg">Contact us</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="contact_text"><strong>You want to join <p class="dark_contact_text">Dark Code School’s Force</p><hr/>
                        - Click on the button above<br/>
                        - Let us a message<br/>
                        We will contact you for a meeting<br/>
                        <hr/>
                        And soon, you’ll be part of the <p class="force_contact_text">Force</p></strong></h2>
            </div>

        </div>
    </div>
</section>

<?php require '../src/footer.html'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
