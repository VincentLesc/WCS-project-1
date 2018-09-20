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

    // toggle Display: None/Block of the contact form

    $('.btn-primary').on('click', function(){
        $('form.rebels').toggle();
        if($('form.empire').css('display','block')){
            $('form.rebels').css('display','none');
        };
    });

    $('.btn-danger').on('click', function(){
        $('form.empire').toggle();
        if($('form.rebels').css('display','block')){
            $('form.empire').css('display','none');
        };
    });