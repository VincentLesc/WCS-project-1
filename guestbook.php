<!doctype= html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Wild Code School</a>
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
</header>
<section id="messages">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 offset-lg-1 card-book">
                <div class="row">
                    <div class ="col-lg-3 customer">
                        <img class="card-img-top" src="https://www.rubriketdebrok.com/wp-content/uploads/2014/10/1410967177-dragonballzgif-0.gif" style="height:8rem" alt="profil">
                        <div class="card-body">
                            <h3 class="card-title">$firstName $lastName</h3>
                            <p class="card-text">$age <br /> $ville</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-12 title">
                                $title
                            </div>
                            <div class="col-12 message" style="height:15rem">
                                $Message
                            </div>
                            <div class="col-12 date">
                                $date $hour
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 offset-md-1 card-book">
                <div class="row">
                    <div class="col-lg-9 order-2 order-lg-1">
                        <div class="row">
                            <div class="col-12 title">
                                $title
                            </div>
                            <div class="col-12 message" style="height:15rem">
                                $Message
                            </div>
                            <div class="col-12 date">
                                $date $hour
                            </div>
                        </div>
                    </div>
                    <div class ="col-lg-3 order-1 order-lg-2 customer">
                        <img class="card-img-top" src="http://payload506.cargocollective.com/1/17/570101/12439724/HOSTIONENLACARA.gif" style="height:8rem" alt="profil">
                        <div class="card-body">
                            <h3 class="card-title">$firstName $lastName</h3>
                            <p class="card-text">$age <br /> $ville</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 offset-lg-1 card-book">
                <div class="row">
                    <div class ="col-lg-3 customer">
                        <img class="card-img-top" src="http://www.lezilus.fr/uploads/projects/5852b6d2871bc640ff1943e9ee071e809e6844c5.gif" style="height:8rem" alt="profil">
                        <div class="card-body">
                            <h3 class="card-title">$firstName $lastName</h3>
                            <p class="card-text">$age <br /> $ville</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-12 title">
                                $title
                            </div>
                            <div class="col-12 message" style="height:15rem">
                                $Message
                            </div>
                            <div class="col-12 date">
                                $date $hour
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="submit">
    <div class="container">
        <form>
            <div class="form-row">
                <div class="col-12 col-lg-6 form-group">
                    <label for="first_name">First name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="col-12 col-lg-6 form-group">
                    <label for="name">Family name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="col-12 form-group">
                    <label for="birth_date">Birth date</label>
                    <input type="date" name="birth_date" max="3000-12-31"
                           min="1850-01-01" class="form-control">
                </div>
                <div class="col-12 col-lg-6 form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control">
                </div>
                <div class="col-12 col-lg-6 form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" class="form-control">
                </div>
                <div class="col-12 form-group">
                    <label for="avatar">Avatar</label>
                    <div name="avatar" id="avatar" class="form-control">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <input class="form-check-input" type="radio" id="img_1" name="img">
                                <label class="form-check-label" for="img_1"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 1"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_2" name="img">
                                <label class="form-check-label" for="img_2"><img
                                            src="https://media.giphy.com/media/DCHOd9wCwo0vZ0fyvV/giphy.gif" alt="gif 2"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_3" name="img">
                                <label class="form-check-label" for="img_3"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 3"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_4" name="img">
                                <label class="form-check-label" for="img_4"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 4"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_5" name="img">
                                <label class="form-check-label" for="img_5"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 5"></label>

                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_6" name="img">
                                <label class="form-check-label" for="img_6"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 6"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_7" name="img">
                                <label class="form-check-label" for="img_7"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 7"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_8" name="img">
                                <label class="form-check-label" for="img_8"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 8"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_9" name="img">
                                <label class="form-check-label" for="img_9"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 9"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_10" name="img">
                                <label class="form-check-label" for="img_10"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 10"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_11" name="img">
                                <label class="form-check-label" for="img_11"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 11"></label>
                            </div>
                            <div class="col-12 col-lg-3">

                                <input class="form-check-input" type="radio" id="img_12" name="img">
                                <label class="form-check-label" for="img_12"><img
                                            src="https://media.giphy.com/media/3iEdblDNfi0es/giphy.gif" alt="gif 12"></label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-6>
                    <form action="?" method="POST">
                        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 offset-lg-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </div>
    </div>
    </div>
    </form>
    </div>
</section>




</footer>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>