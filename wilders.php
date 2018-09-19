<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Wild Code School humoristic website">
	<meta name="author" content="Maureen Vinchent">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Wild Code School - Wilders</title>
</head>
<body>
<?php require 'navbar.html' ?>
    <section>
        <div class="container">
            <div class="row">
                <img src="photos/groupe.jpg" alt="Banniere img" class="w-100 h-50"/>
            </div>
            <div class="row text-center justify-content-center">
                <h1 class="m-3" id="wilders">Developers army</h1>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <img src="photos/stormdeveloper.jpg" alt="Img" class="img-fluid float-lg-right p-2">
                </div>
                <div class="col-md-7">
                    <p class="text-justify">
                        You want to be a web developer ? You're wondering 'How can I join this great school ?' This is "easy", we will explain you how to be part of the Dark Code School team.
                        You have to know that you will deal with a long recruitment process with several steps during several months and it is better to be prepared.<br/>
                        First, you have to wear beautiful or original socks, it is the first criterion.The instructors or the Campus Manager can stop your application if this criterion is not respected. Then, the instructors will organize a big lightsaber battle with all candidates and they will save just 20 of them. You're wondering 'But, what this has to do with web development ?', you're right, there is nothing to do with web development... But you have to know that our instructors and our Campus Manager are a little bit sadistic.<br/>
                        At the end of the battle, they will give you plenty of exercises, called quests, and if you don't success it in a record time, they will... Mhh no I'm not going to tell you today what they will do to you, you will discover it quickly !
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr class="mt-5"/>

    <section>
        <div class="container">
            <div class="row justify-content-between ml-lg-1 ml-5 mt-5">
                <img src="photos/vladimir.jpg" alt="Img" class="img-fluid rounded-circle ml-lg-3 ml-2 mr-3 mb-3">
                <img src="photos/fleur.jpg" alt="Img" class="img-fluid rounded-circle ml-lg-3 ml-2 mr-3 mb-3">
                <img src="photos/vincent.jpg" alt="Img" class="img-fluid rounded-circle ml-lg-3 ml-2 mr-3 mb-3">
                <img src="photos/florian.jpg" alt="Img" class="img-fluid rounded-circle ml-lg-3 ml-2 mr-3 mb-3">
                <img src="photos/mo.png" alt="Img" class="img-fluid rounded-circle ml-lg-3 ml-2 mr-3 mb-3">
            </div>
            <div class="row">
                <p class="ml-3 mr-3 text-justify">
                    The Wild Code School is dedicated to put forward diversity by including several personalities within the school. For example, our Campus Manager is a master Jedi, our instructor Loïc is a Wookiee and our instructor Gaëtan is between a Jedi and Dark Vador, depends on his mood of the day. It is the same with the students who are kind Stormtroopers on the right side of the Force. But five of our students are not Stormtroopers yet but real Jedi apprentices, let me introduce them : Vladimir, Fleur, Vincent, Florian and Maureen. They are trying everyday to learn from the Force with all the Stormtroopers, they help and learn from each others because they have the same goal : being a good web developer ! Well, sometimes they have to confront themselves during tennis table games during lunch break but always in a good mood.<br/>
                    Life in Wild Code School is not always easy as web developer life, you will discover why soon but for now we want to share with you our daily emotions.
                </p>
            </div>
            <div class="row justify-content-between ml-1 mr-1">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When you start a dojo !
                    </div>
                    <img src="photos/fear.gif" alt="Fear">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When you're going to merge your branches on Git !
                    </div>
                    <img src="photos/regret.gif" alt="Regret" style="height:213px;">
                </div>
            </div>
            <div class="row justify-content-between ml-1 mr-1">
                 <div class="card mt-4">
                    <div class="card-body text-center">
                        When you succeed your first group project !
                    </div>
                    <img src="photos/stormdance.gif" alt="Stormtroopers Dance">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When you come back home after school !
                    </div>
                    <img src="photos/r2d2.gif" alt="Tired">
                </div>
            </div>
            <div class="row justify-content-between ml-1 mr-1">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When you forgot to lock your computer !
                    </div>
                    <img src="photos/trap.gif" alt="Trap">
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        When your console displays error messages with "Kernel" word !
                    </div>
                    <img src="photos/notreassuring.gif" alt="Not reassuring">
                </div>
            </div>
        </div>
    </section>

    <hr class="mt-5 mb-4"/>

    <section>
        <h3 class="text-center mt-4 mb-4">Will you be a good Wild Code School student ?</h3>
        <div class="container mb-3" id="quiz">
            <div class="row justify-content-between ml-1 mr-1">
                <div class="card mb-3 p-3">
                    <div class="card-body text-center">
                        <strong>Question 1</strong>
                    </div>
                    <label class="ml-2">Do you like coding without shoes ?</label>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q1=1, a1=1" name="answerq1" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">No it's so weird... YOU'RE so weird ! Why<br> people do that ?</label>
                    </div>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q1=2, a1=1" name="answerq1" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Mhh it's ok but my feet stink...</label>
                    </div>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q1=3, a1=1" name="answerq1" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">Yes it is not a problem for me !</label>
                    </div>
                </div>
                <div class="card mb-3 p-3">
                    <div class="card-body text-center">
                        <strong>Question 2</strong>
                    </div>
                    <label class="ml-2">Do you like work group ?</label>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q2=1, a2=1" name="answerq2" id="example2Radios1" value="option1">
                        <label class="form-check-label" for="example2Radios1">No I prefer to be alone, I don't like people.</label>
                    </div>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q2=2, a2=1" name="answerq2" id="example2Radios2" value="option2">
                        <label class="form-check-label" for="example2Radios2">Mhh it depends who is in the team... <br>And sometimes I'm very annoying !</label>
                    </div>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q2=3, a2=1" name="answerq2" id="example2Radios3" value="option3">
                        <label class="form-check-label" for="example2Radios3">Yeah I love work group and share with others !</label>
                    </div>
                </div>
                <div class="card mb-3 p-3">
                    <div class="card-body text-center">
                        <strong>Question 3</strong>
                    </div>
                    <label class="ml-2">Do you like playing tennis table ?</label>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q3=1, a3=1" name="answerq3" id="example3Radios1" value="option1">
                        <label class="form-check-label" for="example3Radios1">No it sucks...</label>
                    </div>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q3=2, a3=1" name="answerq3" id="example3Radios2" value="option2">
                        <label class="form-check-label" for="example3Radios2">I don't hate it, but I'm not a good player,<br> I prefer table football !</label>
                    </div>
                    <div class="form-check mt-2 ml-2">
                        <input class="form-check-input" type="radio" onclick="q3=3, a3=1" name="answerq3" id="example3Radios3" value="option3">
                        <label class="form-check-label" for="example3Radios3">I LOVE that and I'm really good !</label>
                    </div>
                </div>
            </div>
            <div class="container" id="containerResult">
                <div class="mt-3 mb-3 ml-lg-1 ml-3 text-center" id="textResult">
                    <input type="button" class="btn btn-dark" onclick="resultat()" value="Submit">
                </div>
            </div>
            <div class="mt-3 mb-3 ml-lg-1 ml-3 text-center" id="refresh">
                <input type="button" class="btn btn-dark" id="refresh" onclick="refresh()" value="Refresh">
            </div>
        </div>
    </section>

<?php require 'footer.html'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="quiz.js"></script>
</body>
</html>