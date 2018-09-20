<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wild code school - Guest book</title>
    <link href="../public/CSS/image-picker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="../public/CSS/style.css" rel="stylesheet">
</head>
<body>
<?php require '../src/navbar.html' ?>
<section id = "messages" >
    <div class="container" >
        <div class="comment" >
            <?php include '../src/display-guestbook.php';
            displayGuestBook() ?>
        </div>
    </div>
</section>

<section id="submitGuestBook">
    <div class="container">
        <form action="../src/traitement-guestbook.php" method="post">
            <div class="form-row">
                <div class="col-12 col-lg-6 form-group">
                    <label for="first_name">First name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                </div>
                <div class="col-12 col-lg-6 form-group">
                    <label for="name">Family name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="col-12 form-group">
                    <label for="birth_date">Birth date</label>
                    <input type="date" name="birth_date" max="2018-01-01"
                           min="1850-01-01" class="form-control" id="birth_date" required>
                </div>
                <div class="col-12 col-lg-6 form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="col-12 col-lg-6 form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
                <div class="col-12 form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="col-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="5" class="form-control"
                              placeholder="Write your text here." required></textarea>
                </div>
                <div class="col form-group">
                    <label for="avatar">Avatar</label>
                    <select class="image-picker" name="avatar" id="avatar">
                        <option data-img-src="../public/Images/avatar/avatar1.gif">../public/Images/avatar/avatar1.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar2.gif">../public/Images/avatar/avatar2.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar3.gif">../public/Images/avatar/avatar3.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar4.gif">../public/Images/avatar/avatar4.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar5.gif">../public/Images/avatar/avatar5.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar6.gif">../public/Images/avatar/avatar6.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar7.gif">../public/Images/avatar/avatar7.gif</option>
                        <option data-img-src="../public/Images/avatar/avatar8.gif">../public/Images/avatar/avatar8.gif</option>
                    </select>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>



<?php require '../src/footer.html' ?>

<script src="../public/JS/jquery-3.3.1.min.js"></script>
<script src="../public/JS/image-picker.min.js"></script>
<script>
    $( ".image-picker" ).imagepicker();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>