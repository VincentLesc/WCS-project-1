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
    <title>Dark Code School - Instructors</title>
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
                        <img class="card-img-top olivierImg" src="../src/Images/instructors/olivier.jpg" alt="Olivier">

                        <div class="card-body">
                            <h5 class="card-title">Olivier</h5>
                            <p class="card-text text-justify">
                                Olivier Trentesaux is the Campus Manager of the Dark Code School of Lille. He was an important figure in the Rebel Alliance and a famous Jedi Knight before being a Campus Manager. He always stays in the right side of the Force, except when he plays tennis table. He is very attentive and cares about his students. He gives us good advice for our future carreer.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Gaëtan -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="card-img-top gaetanImg" src="../src/Images/instructors/gaetan.jpg" alt="Gaetan">
                        <div class="card-body">
                            <h5 class="card-title">Gaëtan</h5>
                            <p class="card-text text-justify">
                                Gaëtan Rolé-Dubruille is the PHP instructor of the Dark Code School of Lille. He is ambivalent because some days he is a kind Jedi, some days he is Dark Vador, it depends on his mood but he's always there to help you. He likes playing tennis table but he hates loosing, so you have to be careful and let him win if you want him to be kind with you.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Loïc -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="card-img-top loicImg" src="../src/Images/instructors/loic.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Loïc</h5>
                            <p class="card-text text-justify">
                                Loïc Brassart is the JavaScript instructor of the Dark Code School of Lille. He is a Wookiee, a tall hirsute biped and intelligent species from the planet Kashyyyk. He loves participating in work sessions and drinking beer after work. We don't understand everything he says but he is careful with his students and always there to help them.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="w-50"/>
    <section>
        <div class="container">
            <div class="row justify-content-between ml-1 mr-1">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When you think you understand PHP/JS classes !
                    </div>
                    <img src="../src/Images/instructors/muchtolearn.gif" alt="Fear">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When your teacher says your code is ugly...
                    </div>
                    <img src="../src/Images/instructors/forceworks.gif" alt="Regret">
                </div>
            </div>
            <div class="row justify-content-between ml-1 mr-1">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When Gaëtan looses a ping pong match !
                    </div>
                    <img src="../src/Images/instructors/loosepong.gif" alt="Stormtroopers Dance">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When he wins...
                    </div>
                    <img src="../src/Images/instructors/winpong.gif" alt="Tired">
                </div>
            </div>
        </div>
    </section>
<?php require 'footer.html'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="hover.js"></script>
</body>
</html>
