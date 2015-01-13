<!DOCTYPE html>   
    <html lang="en">   
      <head>   
        <meta charset="utf-8">   
        <title>Twitter Bootstrap Basic Tab Based Navigation Example</title>   
        <meta name="description" content="Twitter Bootstrap Basic Tab Based Navigation Example">  
        <link href="assets/twitterbootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">   
      </head>  
            <body>  
                <div class="container" style="margin:0; width:100%">  
                  
                      <ul class="nav nav-tabs">  
                        <li class="active"><a href="#">Welcome</a> </li>   
                        <li><a href="#Getstarted">Get started</a></li>  
                        <li><a href="#">Measure</a></li>   
                        <li><a href="#">Report</a></li>   
                        <li><a href="#">Reduce</a></li>   
                        <li><a href="#">Offset</a></li>   
                        <img src="img/logo.gif">
                      </ul>  
                  <div id="my-tab-content" class="tab-content">
                      <div class="tab-pane active" id="Welcome">
                          <h1>Welcome</h1>
                          <p>testttttt</p>
                      </div>
                      <div class="tab-pane" id="Getstarted">
                          <h1>Get started</h1>
                          <p>orange orange orange orange orange</p>
                      </div>
                      <div class="tab-pane" id="yellow">
                          <h1>Yellow</h1>
                          <p>yellow yellow yellow yellow yellow</p>
                      </div>
                      <div class="tab-pane" id="green">
                          <h1>Green</h1>
                          <p>green green green green green</p>
                      </div>
                      <div class="tab-pane" id="blue">
                          <h1>Blue</h1>
                          <p>blue blue blue blue blue</p>
                      </div>
                  </div>
              </div>  
               
                             <script type="text/javascript">
                  jQuery(document).ready(function ($) {
                      $(".tabs").tabs();
                  });
              </script>    
              </div> <!-- container -->

              <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.js"></script>
              <script type="text/javascript" src="js/bootstrap.js"></script>

            </body>  
           

   </html>  
           
          