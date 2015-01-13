

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset = "UTF-8">
  <title> Property </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
  <link rel="stylesheet" type="text/css" href="css/star-rating.css">
  <link rel="stylesheet" type="text/css" href="css/reveal.css" >
  <link href='css/strength.css' rel='stylesheet' type='text/css'>
  <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

  
  <script type="text/javascript" src="scripts/jquery-1.4.4.min.js"></script> 
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.reveal.js"></script>
  <script type="text/javascript" src="scripts/jquery.pwstrength.min.js"></script>
  <script type="text/javascript" src="scripts/checkusers.js"></script>
  <script type="text/javascript" src="scripts/star-rating.js"></script>
  

</head>

<body>

<?php include('Header file/Header.php');  ?>

<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
      <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2>Slide 1</h2>
            <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <h2>Slide 2</h2>
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <h2>Slide 3</h2>
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
 
 </body>
</html