<?php
  require_once 'includes/header.php'
?>

<main>  
  <div class="embed-responsive embed-responsive-16by9 main-banner" id="top">
    <video autoplay muted loop id="bg-video">
      <source src="<?php echo MULTIPATH ?>video/video.mp4" type="video/mp4" />
    </video>
    <div class="video-overlay fs-4">
      <div class="caption text-center">
          <h6>Lorem ipsum dolor sit amet</h6>
          <h2 class="text-uppercase">Best <em>car dealer</em> in town!</h2>
          <div class="main-button">
            <a href="contact.html">Contact Us</a>
          </div>
      </div>
      </div>
  </div>

  <section>
    <div class="container">
      <h2 class="pt-5 text-center">
        Find a Great Price on the Vehicle You Want

      </h2>
      <div class="row justify-content-evenly">
        <div class="col col-12 col-md-4 mt-md-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo MULTIPATH ?>imgs/recent-blog-2.jpg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;8000</del>&nbsp;&nbsp;<label>&#36;6000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-4 mt-md-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo MULTIPATH ?>imgs/car_755x430.png" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;6000</del>&nbsp;&nbsp;<label>&#36;4000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-4 mt-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo MULTIPATH ?>imgs/recent-car-1.jpg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;6000</del>&nbsp;&nbsp;<label>&#36;5000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-2 pb-4 d-flex justify-content-evenly">
        <div class="col col-12 col-md-4 mt-auto">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo MULTIPATH ?>imgs/featured-img-1.jpg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;8000</del>&nbsp;&nbsp;<label>&#36;6000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-4 mt-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo MULTIPATH ?>imgs/featured-img-3.jpg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;6000</del>&nbsp;&nbsp;<label>&#36;4000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-4 mt-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo MULTIPATH ?>imgs/featured-img-2.jpg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;6000</del>&nbsp;&nbsp;<label>&#36;5000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>




<?php
  require_once 'includes/footer.php'
?>