<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Wild Code School humoristic website">
	<meta name="author" content="Maureen Vinchent">
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Wild Code School - Instructors</title>
</head>
<body>
<?php require 'navbar.html' ?>
    <section>
        <h1 class="text-center mt-4" id="instructors">The Instructors</h1>
        <!-- Cards for instructors photos -->
        <div class="container mt-5">
            <div class="row text-center justify-content-between">
                <!-- Olivier -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="photos/olivier.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Olivier</h5>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
                                ultricies sed, dolor. Cras elementum ultrices diam.</p>
                        </div>
                    </div>
                </div>
                <!-- Gaëtan -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="https://via.placeholder.com/150x150" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gaëtan</h5>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
                                ultricies sed, dolor. Cras elementum ultrices diam.</p>
                        </div>
                    </div>
                </div>
                <!-- Loïc -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="https://via.placeholder.com/150x150" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Loïc</h5>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
                                ultricies sed, dolor. Cras elementum ultrices diam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="w-50"/>
            <!-- Other photos + effect (Vladimir) -->
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <img class="card-img-top mb-3" src="https://via.placeholder.com/150x150" alt="Funny image">
                </div>
                <div class="col-md-4">
                    <img class="card-img-top mb-3" src="https://via.placeholder.com/150x150" alt="Funny image">
                </div>
                <div class="col-md-4">
                    <img class="card-img-top mb-3" src="https://via.placeholder.com/150x150" alt="Funny image">
                </div>
            </div>
        </div>
    </section>
<?php require 'footer.html'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
