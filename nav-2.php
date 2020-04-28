<?php
  if(isset($_POST['name'])){
    $name = $_POST['name'];
  }
  else{
    $name = 'Reader';
  }
?>

<div class="container-fluid navbar-2 clearfix">
  <a class="" href=""><button onclick="window.history.back()" class="btn btn-sm push-right btn-warning">&#8630; Go Back</button></a>
  <a class="logout float-right" href="/HCI%20Project"><button class="btn btn-sm push-right btn-warning">Log Out</button></a>
  <span class=" welcome"><b>Welcome </b> <?php echo $name; ?> </span>
</div>
