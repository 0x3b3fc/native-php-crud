<?php
require __DIR__."/bootstrap.php";



showHeader("Create an account");

 ?>

<div class="container">
  <form class="form-control" method="post" action="signup.php">
    <div class="card">
      <div class="card-header">
        Sign Up
      </div>
      <div class="card-body">

        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="name" class="form-control" id="name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password">
        </div>

      </div>
      <div class="">
        <input class="btn btn-primary" value="Signup" type="submit"/>
      </div>
    </div>
  </form>
</div>



<?php showFooter(); ?>
