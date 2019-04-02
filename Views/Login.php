<?php 
include('Controllers/Login.php');
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="Login.php">
              <div class="form-label-group">
              	<label for="inputEmail">Email address: </label>
                <input type="email" name="inputEmailLogin" class="form-control" placeholder="Email address" required autofocus>
              </div>
              <br/>
              <div class="form-label-group">
                <label for="inputPassword">Password: </label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
              </div>
              <br/>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>