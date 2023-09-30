<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="slideshow.css">
        <link rel="stylesheet" href="socialmedia.css">
        <link rel="stylesheet" href="navigation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Homepage</title>
        
    </head>
    <body>
     
    <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">GWSC</div>
    <!-- USING CHECKBOX HACK -->
    <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>


    <!-- NAVIGATION MENU -->
    <ul class="nav-links">

      <!-- NAVIGATION MENUS -->
      <div class="menu">

        <li><a href="Homepage.php">Home</a></li>
        <li><a href="Information.php">Information</a></li>
        <li><a href="user_Reviews.php">Reviews</a></li>
        <li><a href="Features.php">Features</a></li>
        <li><a href="localattractions.php">LocalAttractions</a></li>
        <li><a href="Pitch Types and Availability.php">Pitch Types and Availability</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </div>
    </ul>
  </nav> 
 

    
        <header>
            <h1>Welcome to Global Wild Swimming and Camping</h1>
        </header>
        
        <p>A place for those who enjoy swimming and camping in the wilds</p>
        <div class
        <p>Total Views: <span id="viewCount">0</span></p>
        </div>

    <script src="slideshow.js"></script>
    <script>
      // Generate a random CAPTCHA code (you can customize this)
      function generateCaptcha() {
          const captchaChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
          let captcha = '';
          for (let i = 0; i < 6; i++) {
              const randomIndex = Math.floor(Math.random() * captchaChars.length);
              captcha += captchaChars[randomIndex];
          }
          document.getElementById("captcha-text").textContent = captcha;
      }

      // Check if the entered text matches the CAPTCHA
      function checkCaptcha() {
          const userInput = document.getElementById("captcha-input").value;
          const captchaText = document.getElementById("captcha-text").textContent;

          if (userInput === captchaText) {
              alert("CAPTCHA verification successful!");
          } else {
              alert("CAPTCHA verification failed. Please try again.");
              generateCaptcha(); // Generate a new CAPTCHA
          }
      }
  </script>


  <h2>CAPTCHA Verification</h1>
  <p>Type the characters you see in the image below:</p>
  <div id="captcha-container">
      <span id="captcha-text"></span>
      <input type="text" id="captcha-input" placeholder="Enter CAPTCHA" />
      <button onclick="checkCaptcha()">Submit</button>
  </div>
  
  <script>
      // Generate the initial CAPTCHA code when the page loads
      generateCaptcha();
  </script>
 
    

        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="win.webp" style="width:100%">
            <div class="text">Caption Text</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="wa.avif" style="width:100%">
            <div class="text">Caption Two</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="swim.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          <script>
          let slideIndex = 0;
          showSlides();
          
          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>
          <div class="card">
          <div style="width: 50%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Liwonde,malawi+(Global%20Wild%20Swimming%20and%20Camping%20(GWSC)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Calculate population in area</a></iframe></div>
  </div>
</div>

          
    
          <footer>
            <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
            <p>© All rights reserved</p>
          </footer>
    </body>
</html>