<?php
  require_once 'includes/header.php';
?>

<!-- Modal -->
<div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" required="required">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="d-grid gap-2 text-center">
            <button class="btn text-light" type="submit" style="background: #ed563b !important;">Login</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6"><label>Don't have an account? </label></div>
            <div class="col-md-6">
              <a class="nav-link text-dark"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup"style="cursor:pointer;color:#ed563b !important;">Sign Up here!</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a href="#forgotpassword" data-bs-toggle="modal"  class="text-dark" href="#">Forgot Password ?
              </a>
            </div>
            <div class="col-md-6">
            <a class="text-dark banner-link" href="<?php echo SITEURL ?>home" style="color:#ed563b !important;">Back to Home?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ========== sign up modal box -->
<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required="required">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number" required="required">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" required="required">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required="required">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="d-grid gap-2 text-center">
            <button class="btn text-light" type="submit" style="background: #ed563b !important;">Sign Up</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <div class="container">
          <div class="row">
            <div class="col-md-6"><label>Already got an account? </label></div>
            <div class="col-md-6">
              <a class="nav-link text-dark" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signin" style="cursor:pointer;color:#ed563b !important;">Sign In here!</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <a class="text-dark banner-link" href="<?php echo SITEURL ?>home" style="color:#ed563b !important;">Back to Home?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>