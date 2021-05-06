<?php
  require_once 'includes/header.php'
?>
<main>
  <div class="container-fluid mb-5">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-12">
        <div class="card pb-5">
          <div class="card-body">

            <div class="container">

              <!-- Section: Contact v.3 -->
              <section>

                <!-- Form with header -->
                <div class="card">

                  <!-- Grid row -->
                  <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-8">

                      <div class="card-body form">

                        <!-- Header -->
                        <h3 class="mt-4"><i class="fas fa-envelope"></i>Write to us:</h3>

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-md-6">
                            <div class="md-form mb-0">
                              <input type="text" id="form-contact-name" class="form-control" required>
                              <label for="form-contact-name" class="">Your name</label>
                            </div>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-md-6">
                            <div class="md-form mb-0">
                              <input type="text" id="form-contact-email" class="form-control" required>
                              <label for="form-contact-email" class="">Your email</label>
                            </div>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-md-6">
                            <div class="md-form mb-0">
                              <input type="text" id="form-contact-phone" class="form-control">
                              <label for="form-contact-phone" class="">Your phone</label>
                            </div>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-md-6">
                            <div class="md-form mb-0">
                              <input type="text" id="form-contact-company" class="form-control">
                              <label for="form-contact-company" class="">Your location</label>
                            </div>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-md-12">
                            <div class="md-form mb-0">
                              <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                              <label for="form-contact-message">Your message</label>
                              <div class="text-center">
                              <button type="button" class="btn text-light" style="background-color: #ed563b;">Send Message</button>
                              </div>
                              </div>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                      </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4">

                      <div class="card-body text-center text-dark" style="background-color: #ed563b;">

                        <h3 class="my-4 pb-2">Contact information</h3>
                        <ul class="list-unstyled">
                          <li>
                            <p ><i class="fas fa-map-marker-alt mb-4"></i><?php echo ADDRESS?></p>
                          </li>
                          <li>
                            <p><i class="fas fa-phone mb-4"></i><?php echo PHONE1?></p>
                          </li>
                          <li>
                            <p><i class="fas fa-phone mb-4"></i><?php echo PHONE2?></p>
                          </li>
                          <li>
                            <p><i class="fas fa-envelope"></i><?php echo EMAIL?></p>
                          </li>
                        </ul>
                        <hr class="hr-light my-4">
                        <ul class="list-inline text-center list-unstyled">
                          <li class="list-inline-item">
                            <a class="p-2 fa-lg tw-ic">
                              <i class="fab fa-twitter text-light"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a class="p-2 fa-lg li-ic">
                              <i class="fab fa-linkedin-in text-light"> </i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a class="p-2 fa-lg ins-ic text-light">
                              <i class="fab fa-instagram"> </i>
                            </a>
                          </li>
                        </ul>

                      </div>

                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                </div>
                <!-- Form with header -->

              </section>
              <!-- Section: Contact v.3 -->

            </div>

          </div>
        </div>
      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <section>
    <!--Google map-->
    <div class="z-depth-1-half map-container" style="height: ">
      <iframe src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0"
        allowfullscreen></iframe>
    </div>
  </section>
</main>



<?php
  require_once 'includes/footer.php';
?>