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
            <input type="submit" class="btn btn-warning"></input>
          </form>
          <a href="/HCI%20Project/dashboard.php"><img src="images/btn_google.png"></img></a>
          <p class="para para1"><b>Don't have Accout?</b> <a href="" data-toggle="modal" data-target="#createAccount">Click Here </a>
          <p class="para">Forgot Password? <a href="" onclick="window.alert('Reset Link have been sent to your Email ID')">Click Here </a>

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


<!-- Modal -->
<div class="modal fade" id="createAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please contact your Librarian for creating an Account.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">I'm tired of this College!</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Thank You</button>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
