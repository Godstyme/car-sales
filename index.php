<?php
  require_once 'includes/header.php'
?>

<main>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/imgs/banner-image.jpg" class="d-block w-100 banner-slide" alt="First Slide" height="600">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-uppercase">Find the right car for you</h1>
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/imgs/banner-image.jpg" class="d-block w-100 banner-slide" alt="Second Slide" height="600">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-uppercase">Find the right car for you</h1>
          <!-- <p>Some representative placeholder content for the second slide.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/imgs/banner-image.jpg" class="d-block w-100 banner-slide" alt="Third Slide" height="600">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-uppercase">Find the right car for you</h1>
          <!-- <p>Some representative placeholder content for the third slide.</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section>
    <div class="container">
      <div class="row py-5 justify-content-around">
        <div class="col col-12 col-md-4 mt-auto">
          <div class="card" style="width: 18rem;">
            <img src="assets/imgs/car_755x430.png" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;8000</del>&nbsp;&nbsp;<label>&#36;6000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-4 mt-auto">
          <div class="card" style="width: 18rem;">
            <img src="assets/imgs/car_755x430.png" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"><del>&#36;6000</del>&nbsp;&nbsp;<label>&#36;4000</label></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-4 mt-auto">
          <div class="card" style="width: 18rem;">
            <img src="assets/imgs/car_755x430.png" class="card-img-top img-thumbnail" alt="...">
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