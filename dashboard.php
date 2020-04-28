<?php include("head.php"); ?>
<?php include("nav-2.php");?>
<div id="top" class="container-fluid library">
  <div class="container library-middle">
    <div class="library-category">
      <div class="library-heading" id="category"><h4>Browse by Category</h4></div>
      <div class="row category-row">
        <div class="col-md-2">
          <div class="container category-col">
            <h1><span class="fa fa-superpowers" aria-hidden="true"></span></h1>
            <p><b><a href="/HCI%20Project/dashboard.php#fiction"> Fiction</a></b></p>
            <p class="no-of-books"><i>2000 Books</i></p>
          </div>
        </div>

        <div class="col-md-2">
          <div class="container category-col">
            <h1><span class="fa fa-thermometer-1  " aria-hidden="true"></span></h1>
            <p><b><a href="/HCI%20Project/dashboard.php#science"> Science </a></b></p>
            <p class="no-of-books"><i>2000 Books</i></p>
          </div>
        </div>

        <div class="col-md-2">
          <div class="container category-col">
            <h1><span class="" aria-hidden="true"></span></h1>
            <p><b><a href="/HCI%20Project/dashboard.php#biography"> Biography </a></b></p>
            <p class="no-of-books"><i>2000 Books</i></p>
          </div>
        </div>

        <div class="col-md-2">
          <div class="container category-col">
            <h1><span class="fa fa-venus-double  " aria-hidden="true"></span></h1>
            <p><b><a href="/HCI%20Project/dashboard.php#romance"> Romance </a></b></p>
            <p class="no-of-books"><i>2000 Books</i></p>
          </div>
        </div>

        <div class="col-md-2">
          <div class="container category-col">
            <h1><span class="fa fa-superpowers  " aria-hidden="true"></span></h1>
            <p><b><a href="/HCI%20Project/dashboard.php#recipes"> Recipes </a></b></p>
            <p class="no-of-books"><i>2000 Books</i></p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="container category-col">
            <h1><span class="fa fa-address-card  " aria-hidden="true"></span></h1>
            <p><b><a href="/HCI%20Project/dashboard.php#fantasy"> Fantasy  </a></b></p>
            <p class="no-of-books"><i>2000 Books</i></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="fiction" class="container book-rack">
    <h4 >Fiction</h4>
    <div class="row bg-1">
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/w/id/8267078-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/w/id/9272705-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/w/id/8431743-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/w/id/6908255-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="see-more">
          <a href="/HCI%20Project/single-book.php" class="btn btn-danger" onclick="window.alert('No More book available in this category')">See More</a>
          <a href="#top" class="btn btn-warning">Top &#x2191; </a>        </div>
    </div>
  </div>

  <!-- Rack 2 -->
  <div id="science" class="container book-rack">
    <h4 >Science</h4>
    <div class="row bg-2">
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/b/id/8236351-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/b/id/8236442-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/b/id/6976035-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="col-md-3 book">
          <img src="https://covers.openlibrary.org/b/id/4898540-M.jpg" height="180px" width="120px">
          <h5>Book Name </h5>
          <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
        </div>
        <div class="see-more">
          <a href="/HCI%20Project/single-book.php" class="btn btn-danger" onclick="window.alert('No More book available in this category')">See More</a>
          <a href="#top" class="btn btn-warning">Top &#x2191; </a>      </div>
    </div>
  </div>
<!-- Rack 3 -->
<div id="biography" class="container book-rack">
  <h4 >Biography</h4>
  <div class="row bg-1">
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/9230254-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/8242347-M.jpg" height="180px" width="120px">
        <h5>The Works of Washington Ervin </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/2560515-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/967072-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="see-more">
        <a href="/HCI%20Project/single-book.php" class="btn btn-danger" onclick="window.alert('No More book available in this category')">See More</a>
        <a href="#top" class="btn btn-warning">Top &#x2191; </a>    </div>
  </div>
</div>

<!-- Rack 4 -->
<div id="romance" class="container book-rack">
  <h4 >Romance</h4>
  <div class="row bg-2">
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/w/id/641422-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/w/id/1186324-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/w/id/7319376-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/w/id/47422-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="see-more"><a href="#" class="btn btn-danger" onclick="window.alert('No More book available in this category')">See More</a>
      <a href="#top" class="btn btn-warning">Top &#x2191; </a>    </div>
  </div>
</div>

<!-- Rack 5 -->
<div id="recipes" class="container book-rack">
  <h4 >Recipes</h4>
  <div class="row bg-1">
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/7916175-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/8118929-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/83179-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/6307701-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="see-more">
        <a href="#" class="btn btn-danger" onclick="window.alert('No More book available in this category')">See More</a>
        <a href="#top" class="btn btn-warning">Top &#x2191; </a>
    </div>
  </div>
</div>

<!-- Rack 6 -->
<div id="fantasy" class="container book-rack">
  <h4 >Fantasy</h4>
  <div class="row bg-2">
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/7129396-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/2328102-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/8597022-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="col-md-3 book">
        <img src="https://covers.openlibrary.org/b/id/8235489-M.jpg" height="180px" width="120px">
        <h5>Book Name </h5>
        <a href="/HCI%20Project/single-book.php" class="btn btn-md btn-primary">Borrow</a>
      </div>
      <div class="see-more">
        <a href="#" class="btn btn-danger" onclick="window.alert('No More book available in this category')">See More</a>
        <a href="#top" class="btn btn-warning">Top &#x2191; </a>
    </div>
  </div>





  </div>
</div>

<?php include("footer.php"); ?>
