<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 556080 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
  
   <?php require 'navbar.html' ?>
   
    <div class="container">
    <div class="row">
        <div class="col"></div>
    
        <div class="col-6">
            <form style="margin:10% 0 0 0" class="needs-validation mb-3" role="form" method="post" action="form_script.php" novalidate>
                <div class="form-group row">
                    <label for="userName" class="col-sm-2 col-form-label" style="padding-top: 0px !important;padding-bottom: 0px !important;"><img src="Images/user.png"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Your Name" required>
                    <div class="invalid-feedback">There might be an error !</div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="userEmail" class="col-sm-2 col-form-label" style="padding-top: 0px !important;padding-bottom: 0px !important;"><img src="Images/opened-email-envelope.png"></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" required>
                    <div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please, enter a valid email !</div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="userMessage" class="col-sm-2 col-form-label" style="padding-top: 0px !important;padding-bottom: 0px !important;"><img src="Images/edit.png"></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="userMessage" name="userMessage" rows="4" placeholder="Some text..." required></textarea>
                    <div class="invalid-feedback">This area can not be empty !</div>
                </div>
                </div>
                
                <div class="row">
                    <div class="align-self-center" style="margin: 0 auto;">
                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Contact Us</button>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  </body>
</html>