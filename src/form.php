<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Wild Code School humoristic website">
    <meta name="author" content="Vladimir Solovev">
    <link rel="shortcut icon" href="../public/Images/favicon.ico">
    <link rel="stylesheet" href="../public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../public/CSS/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../public/CSS/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../public/CSS/style.css">

    <title>Contact Us !</title>

</head>
<body>

<?php require 'navbar.html' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center" id="form-title">
            <h2>Now, it's time for you to choose your side !</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-center" >
            <img src="../public/Images/Icon_Faction_Rebel.png" alt="" class="form-icon">
            <div class="col"></div>
            <div class="col"><button type="button" class="btn btn-primary" id="form-icon-btn">Rebels</button></div>
            <div class="col"></div>
        </div>
        <div class="col-md-6 text-center">
            <img src="../public/Images/Icon_Faction_Imperial.png" alt="" class="form-icon">
            <div class="col"></div>
            <div class="col"><button type="button" class="btn btn-danger" id="form-icon-btn">Empire</button></div>
            <div class="col"></div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col"></div>

        <div class="col-md-6">
            <form class="needs-validation rebels" role="form" method="post" action="form_script.php" novalidate>

                <div class="col-sm-12 text-center">
                    <p>There is something dark in you. You definitely have a passion for weak typed programming languages.</p>
                </div>

                <div class="form-group row">
                    <label for="userName" class="col-sm-2 col-form-label form-label-custome"><img class="img-one" src="../public/Images/user_red.png" alt=""></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Your Name" required>
                        <div class="invalid-feedback">There might be an error !</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="userEmail" class="col-sm-2 col-form-label form-label-custome"><img src="../public/Images/opened-email-envelope_red.png" alt=""></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" required>
                        <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please, enter a valid email !</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="userMessage" class="col-sm-2 col-form-label form-label-custome"><img src="../public/Images/edit_red.png" alt=""></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="userMessage" name="userMessage" rows="4" placeholder="Some text..." required></textarea>
                        <div class="invalid-feedback">This area can not be empty !</div>
                    </div>
                </div>

                <div class="row">
                    <div class="align-self-center form-btn-margin">
                        <button type="submit" class="btn btn-danger mb-3" name="submit" id="submit">Contact Us</button>
                    </div>
                </div>

            </form>

        </div>

        <div class="col">
        </div>

    </div>
</div>

<!-- 2nd Contact Form -->
<div class="container">
    <div class="row">
        <div class="col"></div>

        <div class="col-md-6">
            <form class="needs-validation empire" role="form" method="post" action="form_script.php" novalidate>

                <div class="col-sm-12 text-center">
                    <p>It's good to be a nice guy, I feel that you have a passion for well indented code.</p>
                </div>

                <div class="form-group row">
                    <label for="userName" class="col-sm-2 col-form-label form-label-custome"><img class="img-one" src="../public/Images/user.png" alt=""></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Your Name" required>
                        <div class="invalid-feedback">There might be an error !</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="userEmail" class="col-sm-2 col-form-label form-label-custome"><img src="../public/Images/opened-email-envelope.png" alt=""></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" required>
                        <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please, enter a valid email !</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="userMessage" class="col-sm-2 col-form-label form-label-custome"><img src="../public/Images/edit.png" alt=""></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="userMessage" name="userMessage" rows="4" placeholder="Some text..." required></textarea>
                        <div class="invalid-feedback">This area can not be empty !</div>
                    </div>
                </div>

                <div class="row">
                    <div class="align-self-center form-btn-margin">
                        <button type="submit" class="btn btn-primary mb-3" name="submit" id="submit">Contact Us</button>
                    </div>
                </div>

            </form>

        </div>

        <div class="col">
        </div>

    </div>
</div>

<?php require 'footer.html'; ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../public/JS/jquery-3.3.1.min.js"></script>
<script src="../public/JS/bootstrap.bundle.min.js"></script>
<script src="../public/JS/bootstrap.min.js"></script>
<script src="../public/JS/form.js" defer></script>

</body>
</html>
