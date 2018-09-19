<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>EuraDark Arena</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<?php require 'navbar.html'; ?>

<section id="euraslider">
    <div class="container">
        <div class="row p-4 justify-content-center">
            <h2>Title Euratechnologies</h2>
        </div>
        <div class="row p-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../public/Images/euratech/slidereura1.jpg" alt="First slide">
                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta est a nunc fermentum imperdiet. Morbi in
                            ex sed neque convallis accumsan id nec ante. Donec condimentum neque justo, et facilisis justo pharetra eu.
                        </p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../public/Images/euratech/slidereura2.png" alt="Second slide">
                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta est a nunc fermentum imperdiet. Morbi in
                            ex sed neque convallis accumsan id nec ante. Donec condimentum neque justo, et facilisis justo pharetra eu.
                        </p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<hr>

<section id="events">
    <div class="container">
        <div class="row p-4 justify-content-center">
            <h2>Events</h2>
        </div>
        <div class="row justify-content-between pb-4">
            <div class="col-md">
                <div class="card events">
                    <img class="card-img-top event" id="event1" src="../public/Images/euratech/veetevent.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Veet Hackaton 2019</h5>
                        <p class="card-text">Join the team and help Veet to developp the Shaving AI App !
                            Opening of registrations on November 2, 2018
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top" id="event2" src="../public/Images/euratech/bodyfatday.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Basic-Fat Night</h5>
                        <p class="card-text">Can you beat our Gaetano? Come and challenge him at the biggest demonstration
                            of cardboard muscles.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 1 month ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/350x250" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section id="locate">
    <div class="container">
        <div class="row p-4 justify-content-center">
            <h2>Find us in Euratech !</h2>
        </div>
        <div class="row pb-4 justify-content-between mb-3">
            <div class="col-md-7">
                <img src="../public/Images/euratech/map.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="card h-100">
                    <div class="card-header">Address</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">Wild Code School</h5>
                        <p class="card-text"><address>Euratechnologies<br/>4 avenue des Saules, 59160 Lomme</address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require 'footer.html'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../public/JS/euratech.js"></script>
</body>
</html>
