<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>EuraDarkNologie</title>

    <link rel="stylesheet" href="../public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../public/CSS/style.css">
</head>
<body>

<?php require 'navbar.html'; ?>

<section id="euraslider">
    <div class="container">
        <div class="row p-4 justify-content-center">
            <h2>EuraDarkNologie</h2>
        </div>
        <div class="row p-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../public/Images/euratech/slidereura1.jpg" alt="Image of Euratechnologie with stormtrooper">
                        <p class="d-none d-md-block w-100 text-center">Will you be able to join us? Technology deserves, you will have
                            to fight and show courage. Do not forget your socks, your laser mice, and your ground coffee.
                            We are waiting for you.
                        </p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../public/Images/euratech/slidereura2.png" alt=" Image of Euratechnologie before renovation with star wars sky">
                        <p class="d-none d-md-block text-center">
                            After fifty years of battles, we managed to take control. Renovation work is to be expected.
                            Are you ready to roll up your sleeves? Anyway our robots are ready. Don't be afraid and come on !
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
                    <img class="card-img-top event" id="event1" src="../public/Images/euratech/veetevent.png" alt="Veet Hackaton 2019 announcement">
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
                    <img class="card-img-top" id="event2" src="../public/Images/euratech/bodyfatday.png" alt="Body-fat night annoucement">
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
                    <img class="card-img-top" id="event3" src="../public/Images/euratech/Olivier.png" alt="Back to the future party announcement">
                    <div class="card-body">
                        <h5 class="card-title">Back to the future</h5>
                        <p class="card-text">The afterwork of the year. Meet many people, like they were some years ago.
                            Warning : You can juste speak one minute !
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 2 month ago</small></p>
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
            <h2>Find us at EuraDarkNologie !</h2>
        </div>
        <div class="row pb-4 justify-content-between mb-3">
            <div class="col-md-7">
                <img src="../public/Images/euratech/map.png" alt="Map for EuraDarkNologie situation" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="card h-100">
                    <div class="card-header">Location</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">Wild Code School</h5>
                        <div class="card-text h-100 align-items-center">
                            <address>EuraDarkNologie
                                <br/>
                                Start the treasure hunt.
                                <br/>
                                The map opposite is your first clue.
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require 'footer.html'; ?>

<script src="../public/JS/jquery-3.3.1.min.js"></script>
<script src="../public/JS/bootstrap.bundle.min.js"></script>
<script src="../public/JS/euratech.js"></script>
</body>
</html>
