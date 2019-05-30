<?php
  require_once "./template/header.php";
?>
<style media="screen">

::-webkit-input-placeholder {
  text-align: center;
}
:-moz-placeholder { /* Firefox 18- */
  text-align: center;
}
::-moz-placeholder {  /* Firefox 19+ */
  text-align: center;
}
:-ms-input-placeholder {
  text-align: center;
}
</style>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form role="form" method="post" action="user_register.php">
          <fieldset>
            <h2 class="text-uppercase text-center"> SIGN UP</h2>
            <div class="form-group">
              <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username">
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="text-center">
              <input type="submit" class="btn btn-primary" value="Sign Up">
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
