<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Wild Code School humoristic website">
	<meta name="author" content="Maureen Vinchent">
	<link rel="shortcut icon" href="../public/Images/favicon.ico">
    <link rel="stylesheet" href="../public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../public/CSS/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../public/CSS/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../public/CSS/style.css">
    <title>Dark Code School - Instructors</title>
</head>
<body>
    <?php require 'navbar.html' ?>
    <section>
        <h1 class="text-center mt-4" id="instructors">instructors</h1>
        <!-- Cards for instructors photos -->
        <div class="container mt-5">
            <div class="row text-center justify-content-between">
                <!-- Olivier -->
                <div class="col-md-4">
                    <div class="card mb-3 shadow">
                        <img class="card-img-top olivierImg" src="../public/Images/instructors/olivier.jpg" alt="Olivier">

                        <div class="card-body">
                            <h5 class="card-title">Olivier</h5>
                            <p class="card-text text-justify">
                                Olivier Trentesaux is the Campus Manager of the Dark Code School of Lille. The Master of the Force, it's him ! 50 years, quite handsome... Well we're not here to flatter him but let's recognize that having a Campus Manager like him it's quite pleasant ! He always stays in the right side of the Force, except when he plays tennis table but it is another story and you may discover it very soon !
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Gaëtan -->
                <div class="col-md-4">
                    <div class="card mb-3 shadow">
                        <img class="card-img-top gaetanImg" src="../public/Images/instructors/gaetan.jpg" alt="Gaetan">
                        <div class="card-body">
                            <h5 class="card-title">Gaëtan</h5>
                            <p class="card-text text-justify">
                                Gaëtan Rolé-Dubruille is the PHP instructor of the Dark Code School of Lille. Even if he looks like a little child, he can be a beast in coding ! Some days he is a kind Jedi, some days he is like Dark Vador, it depends on his mood but he's always there to help you. Well sometimes he punches us if we don't succeed in solving algorithms or if you beat him at ping pong but, hush, don't tell him that you know ok ?
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Loïc -->
                <div class="col-md-4">
                    <div class="card mb-3 shadow">
                        <img class="card-img-top loicImg" src="../public/Images/instructors/loic.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Loïc</h5>
                            <p class="card-text text-justify">
                                Loïc Brassart is the JavaScript instructor of the Dark Code School of Lille. He is a Wookiee, a tall hirsute biped and intelligent species from the planet Kashyyyk. Loïc is the quiet Force, sweetness and kindness define him. He loves participating in work sessions and drinking beer after work. We don't understand everything he says but he is careful with his students and allows us to make braids with his beard.
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
                        <p>When you think you understand everything about PHP/JS classes !</p>
                    </div>
                    <img src="../public/Images/instructors/muchtolearn.gif" alt="Fear">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        <p>When your teacher says your code is ugly...</p>
                    </div>
                    <img src="../public/Images/instructors/forceworks.gif" alt="Regret">
                </div>
            </div>
            <div class="row justify-content-between ml-1 mr-1">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        <p>When Gaëtan looses a ping pong match !</p>
                    </div>
                    <img src="../public/Images/instructors/loosepong.gif" alt="Stormtroopers Dance">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        <p>When he wins...</p>
                    </div>
                    <img src="../public/Images/instructors/winpong.gif" alt="Tired">
                </div>
            </div>
        </div>
    </section>
    <?php require 'footer.html'; ?>
    <script src="../public/JS/jquery-3.3.1.min.js"></script>
    <script src="../public/JS/bootstrap.bundle.min.js"></script>
    <script src="../public/JS/bootstrap.min.js"></script>
    <script src="../public/JS/hover.js"></script>
</body>
</html>
