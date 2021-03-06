
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Sam Smolen: Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/template.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>
            <div>
                <a href="template.html">
                    <img class="logo" src="images/logo.jpg" alt="logo" />
                </a>
                <span style="vertical-align:top"> Siddha Reed Construction</span>
            </div>
     </h1>
     <nav class="topnav" id="myTopnav">
       <a href="template.html">Welcome</a>
       <a href="testimonials.html">Testimonials</a>
       <a href="portfolio.html">Portfolio</a>
       <a href="disclaimer.html">Disclaimer</a>
       <a href="https://web-students.net/site112/it161FinalProj/SamS_it161FP/contactus.php" class="active">Contact Siddha</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     
       
       <h2 class="subheader">We'd love to hear from you!</h2>
<form action="contact.php" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>
<div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div>
<div>
    <input type="submit" value="submit" />
</div>	
</form>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "sam.smolen@icloud.com";  //place your/your client's email address here
        $toName = "Sam Smolen"; //place your client's name here
        $website = "Sams IT161 Website";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script>
        /**
        * requires reCAPTCHA so user doesn't lose form data 
        *
        * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
        * 
        * In this version, jQuery is required and code will find first form on page and require 
        * the reCAPTCHA for that form using document.forms[0]
        */
    
        function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
    </script>       <p class="clear-recaptcha"></p> 
       
       
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contactus.php">Sam Smolen</a>, All Rights Reserved ~ 
          <a href="disclaimer.html">Disclaimer</a> ~
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>