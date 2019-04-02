<?php 
include('Controllers/Signup.php');
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign up</h5>
            <form class="form-signin" method="POST" action="Signup.php">
              <div class="form-label-group">
              	<label for="inputName">Name: </label>
                <input type="text" name="inputName" class="form-control" placeholder="Name" required autofocus>
              </div>
              <br/>
              <div class="form-label-group">
              	<label for="inputEmail">Email address: </label>
                <input type="email" name="inputEmailSignup" class="form-control" placeholder="Email address" required>
              </div>
              <br/>
              <div class="form-label-group">
                <label for="inputPassword">Password: </label>
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
              </div>
              <br/>
              <div class="form-label-group">
                <label for="inputPassword2">Password: </label>
                <input type="password" name="inputPassword2" class="form-control" placeholder="Repeat your password" required>
              </div>
              <br/>
              <button name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>