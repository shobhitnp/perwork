<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Radio Website</title>
    <!-- meta set -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Himali Rescue Center">
    <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="css/radio.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/media.css">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </head>
  <body>
      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    <header class="site-header" id="top">
      <nav class="navbar navbar-default">
          <div class="container">
              <div class="row">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span id="expand" class="glyphicon glyphicon-plus-sign"></span>
                        <span id="no-expand" class="glyphicon glyphicon-minus-sign"></span>
                      </button>
                      <div class="logo-wrapper">
                          <a class="navbar-brand" href="index.php">
                              <img src="img/icons/logo.png" class="img-responsive">
                          </a>
                      </div>  
                  </div>
                  <div class="collapse navbar-collapse" id="main-menu">
                      <div class="audio-wrap">
                        <aside class="audio">
                          <figcaption>6am News</figcaption>
                          <audio controls autoplay>
                            <source src="http://108.166.174.131:8056/;" type="audio/mpeg">
                          </audio>
                        </aside>
                        <fieldset>
                          <div class="pro">
                            <i class="fa fa-arrow-left"></i>
                            <legend>Jagaran</legend>
                          </div>
                          <div class="pro">
                            <i class="fa fa-arrow-right"></i>
                            <legend>Interview</legend>
                          </div>
                        </fieldset>
                      </div>
                      <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a data-toggle="modal" data-target="#about" href="#">About Us</a>
                        </li>
                        <li>
                          <a data-toggle="modal" data-target="#pros" href="#">Program Schedule</a>
                        </li>
                        <li>
                          <a data-toggle="modal" data-target="#rjpro" href="#">Our RJs</a>
                        </li>
                      </ul>
                  </div>
              </div> 
          </div>
      </nav>
    </header>