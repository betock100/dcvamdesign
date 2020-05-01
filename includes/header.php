<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menu.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/favian/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favian/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favian/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favian/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favian/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favian/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favian/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favian/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favian/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favian/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favian/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favian/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favian/favicon-16x16.png">
<link rel="manifest" href="images/favian/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favian/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <title>DC VA MDesign</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(function() {
        $(".toggle").on("click", function() {
          if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
          } else {
            $(".item").addClass("active");
          }
        })
      });
    </script>    
  </head>
  <body>

  
    <div class="slider">
      <div id="infoi">
         <h1 class="header">DC VA MDesign </h1> <br>
        We are here to help you grow your business, contact us! 
      </div>
      
      <div class="sliderchild">
        <div class="imagecon">
          <!--slide 1-->
        </div>
        <div class="imagecon">     
        </div>
        <div class="imagecon">         
        </div>
        <div class="imagecon">          
        </div>
        <div class="imagecon">          
        </div>
      </div>
    </div>
    <nav>
      <ul class="menu">
        <!--imagen con clase logo and larger image class for style -->
        <li class="logo"><a href="index.php"><img class="larger-image" src="images/logo5.png" alt="Dc Metro Remodeling"></a></li>
        <li class="item"><a href="index.php">Home</a></li>
        <li class="item"><a href="clients.php">Portfolio</a></li>
        <li class="item"><a href="platforms.php">Platforms</a></li>
        <li class="item button" ><a href="payments.php">Payments </a></li>
        <li class="item button secondary"><a href="contact.php">Contact us</a></li>
        <li class="toggle"><span class="bars"></span></li>
      </ul>
    </nav>