<?php include("head.php") ?>
<div class="container-fluid hero">
  <div class="row">

    <div class="col-md-4 login-form">
      <div class="login-form-middle">
        <div class="login-form-inner container">
          <form method="post" action="dashboard.php">
            <h1>Sign In </h1>
            <div class="form-group">
              <input class="form-control" name="name" id="username" type="text" placeholder="Username/Email Id" required>

            </div>
            <div class="form-group">
              <input class="form-control" name="login_pass" id="login_pass" type="password" placeholder="Password" required>

            </div>
            <input type="submit" class="btn btn-primary"></input>
          </form>
          <p><b>Don't have Accout?</b> <a href="#" onclick="window.alert('Don\'t waste my time, go talk to your Librarian!')">Click Here </a>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="heading">
        <h1> <span>Welcome to the World of</span> <br> <b>Knowledge</b></h1>
      </div>
    </div>
  </div>
</div>



<?php include("footer.php"); ?>
