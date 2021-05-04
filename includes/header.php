<?php
  require_once 'config/config.php';
  $page = $_SERVER['REQUEST_URI'];
  $page = explode("/", $page);
  // $page = $page[2]; 
  $last = end($page);
  echo $last;

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
    <link rel="icon" href="<?php echo MULTIPATH ?>imgs/favicon-icon/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo MULTIPATH ?>css/style.css">
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
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    
    