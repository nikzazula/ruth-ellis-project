

//contact page
<script src="myscripts.js"></script>
$('#contact-flip-card #contact-flip-card-inner').click(function(){
    $(this).toggleClass("flip");
});
var frmvalidator  = new Validator("contactform");
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email");
    frmvalidator.addValidation("email","email",
      "Please enter a valid email address");