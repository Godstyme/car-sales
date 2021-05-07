<?php
  require_once 'config/config.php';
  $page = $_SERVER['REQUEST_URI'];
  $page = explode("/", $page);
  $last = end($page);

  if ($last == "home" or $last == ""):
    $currentPage = "home"; 
  elseif ($last == "about"):
    $currentPage = "about";  
  elseif ($last == "contact"):
    $currentPage = "contact";    
  elseif ($last == "service"):
    $currentPage = "service";    
  else:
    $currentPage = "error";
     
  endif;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo FULL_NAME .' :: '. SLOGAN ?></title>
    <link rel="icon" href="assets/imgs/favicon-icon/favicon.png">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="server/js/request.js"></script>
  </head>
  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-header">
        <div class="container-fluid">
          <a class="navbar-brand brand-holder" href="#">
            <img src="assets/imgs/logo.png" alt="" width="100" height="40" class="d-inline-block align-text-top">
              CAR SALES
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item nav-list-spacing">
                <a class="nav-link <?php if ($currentPage=='home' || $currentPage==''): echo 'active'; else: echo ' '; endif; ?>" aria-current="page" href="<?php echo SITEURL ?>home">Home </a>
              </li>
              <li class="nav-item nav-list-spacing">
                <a class="nav-link <?php if ($currentPage=='about'): echo 'active'; else: echo ' '; endif; ?>" aria-current="page" href="<?php echo SITEURL ?>about">About Us</a>
              </li>
              <li class="nav-item nav-list-spacing">
                <a class="nav-link <?php if ($currentPage=='contact'): echo 'active'; else: echo ' '; endif; ?>" aria-current="page" href="<?php echo SITEURL ?>contact">Contact Us</a>
              </li>
              <li class="nav-item nav-list-spacing">
                <a class="nav-link <?php if ($currentPage=='service'): echo 'active'; else: echo ' '; endif; ?>" aria-current="page" href="<?php echo SITEURL ?>service">Services</a>
              </li>
            </ul>
            <form class="d-flex">
              <a class="nav-link text-white btn btn-custom-design" data-bs-toggle="modal" data-bs-target="#signin"> SIGN IN</a>
            </form>
          </div>
        </div>
      </nav>
    </header>
    
    