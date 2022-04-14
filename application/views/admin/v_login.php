<div role="main" class="main">
  <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2 text-center">
          <h1 class="font-weight-bold text-dark">Login</h1>
        </div>
        <!-- <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block text-center">
            <li><a href="#">Home</a></li>
            <li class="active">Pages</li>
          </ul>
        </div> -->
      </div>
    </div>
  </section>

  <div class="container py-4">

    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
        <!-- <h2 class="font-weight-bold text-5 mb-0">Login</h2> -->
        <p><?php echo $this->session->flashdata('msg'); ?></p>

        <form action="<?php echo site_url() . 'admin/login/auth' ?>" method="post" id="frmSignIn" class="needs-validation" novalidate="novalidate">
          <div class="row">
            <div class="form-group col has-success">
              <label class="form-label text-color-dark text-3">Username <span class="text-color-danger"></span></label>
              <input type="text" value="" name="username" id="username" class="form-control form-control-lg text-4 is-valid valid" required="" aria-invalid="false">
            </div>
          </div>
          <div class="row">
            <div class="form-group col has-success">
              <label class="form-label text-color-dark text-3">Password <span class="text-color-danger"></span></label>
              <input type="password" name="password" id="password" value="" class="form-control form-control-lg text-4 is-valid valid" required="" aria-invalid="false">
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <?= $captcha_img ?> &nbsp;<a href="#" onclick="parent.window.location.reload(true)">[perbarui gambar]</a>
              <!-- <label class="form-label text-color-dark text-3">Password <span class="text-color-danger"></span></label> -->
              <!-- <input type="password" name="password" id="password" value="" class="form-control form-control-lg text-4 is-valid valid" required="" aria-invalid="false"> -->
              <input type="text" name="input_captcha" class="form-control form-control text-2" required>
            </div>
          </div>


          <div class="row justify-content-between">
            <div class="form-group col-md-auto">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rememberme">
                <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
              </div>
            </div>
            <!-- <div class="form-group col-md-auto">
              <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="#">Forgot Password?</a>
            </div> -->
          </div>
          <div class="row">
            <div class="form-group col">
              <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
              <!-- <div class="divider">
                <span class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
              </div> -->
              <!-- <a href="#" class="btn btn-primary-scale-2 btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3" data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i> Login With Facebook</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

</div>