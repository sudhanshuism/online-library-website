<html>
  <head>
    <!-- Included Stylesheets -->
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Javascript Libraries -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  <!--  <script src="https://use.fontawesome.com/6036af21bc.js"></script>-->

  </head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="images/mitaoe.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/HCI%20Project/dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Browse
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/HCI%20Project/authors.php">Author</a>
          <a class="dropdown-item" href="/HCI%20Project/dashboard.php#category">Category</a>

          <a class="dropdown-item" href="/HCI%20Project/subjects.php">Subjects</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/HCI%20Project/reading-log.php">My Reading Logs</a>
          <a class="dropdown-item" href="/HCI%20Project/reading-list.php">My List</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Purchased Books</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HCI%20Project/dashboard.php#footer">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HCI%20Project/dashboard.php#footer">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:red" href="/HCI%20Project/" onclick="window.confirm('Are You Sure you want to Logout?')">Logout</a>

      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>

    </form>

  </div>
</nav>
