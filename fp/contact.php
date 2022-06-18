<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Zhongyuan Huang: Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />

 </head>
 <body>
    <header>
        <h1 class="toppic"> &nbsp; </h1>
        <nav class="topnav" id="myTopnav">
                <a href="template.html">Home</a>
                <a href="gallery.html" >Gallery</a>
                <div class="logo"></div>
                <a href="menu.html">Menu</a>
                <a href="contact.php" class="active">Contact</a>  

        </nav>
    </header>
     
   <div class="wrapper">
        <h1 class="subheader" >Contact us!</h1>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "joyluck50@yahoo.com";  //place your/your client's email address here
        $toName = "Joy Luck"; //place your client's name here
        $website = "Joy Luck Website";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>   
    
    <footer>
        <div class="contact-info">
            <div>
            <h2>Contact imformation</h2>
            <ul style="list-style-type:none;">
                <li>81 Chimacum Rd, Port Hadlock-Irondale, WA 98339</li>
                <li>(360) 379-1009</li>
                <li> Monday, Wednesday - Friday: 11AM-9PM <br> Saturday &amp; Sunday: 12-9PM  </li>
            </ul>
            </div>


            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.1100823919774!2d-122.76113468435474!3d48.030900579215086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548fe8ca3f0e9065%3A0x83537f822c8c811a!2sJoy%20Luck%20Restaurant!5e0!3m2!1sen!2sus!4v1655270869605!5m2!1sen!2sus" 
                style="border: 0;;"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>



        </div>

        <p><small>&copy; 2022 by 
            Zhongyuan, All Rights Reserved ~ 
            <a id="html-checker" href="#" target="_blank">Check HTML</a> ~ 
            <a id="css-checker" href="#" target="_blank">Check CSS</a>~
            <a link href="disclaimer.html">Disclaimer</a></small>
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