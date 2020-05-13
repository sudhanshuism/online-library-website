<?php include("nav-3.php"); ?>
  <div class="container single-book">
    <div class="container page-heading"><p><b>1 Edition</b> of this this Book Found</p></div>
  </div>

  <div class="single-book-middle container">
    <div class="row">

      <div class="col-md-3">
        <img src="https://covers.openlibrary.org/b/id/872638-M.jpg" height="300px" width="200px"/>
      </div>

      <div class="col-md-6 ">
        <h1>Simon Lizarus</h1>
        <h6>By- <a href="#">M.A. Kirkwood</a></h6>
        <p>Published on <b>Nov 1, 2003</b> by <a href="#">Airleaf Publishing</a></p>
        <p>Written in <a href="#">English</a></p>
        <hr>
        <p>There's no description for this book yet. <a href="#">Can you add one?</a></p>
        <h5>First Sentence</h5>
        <p>Gram and my mother, Nancy, want me to come home for my sister's 16th birthday party when the spring semester ends, which is in about two and a half months.</p>
        <br>
        <h5>The Physical Object</h5>
        <table>
          <tr>
            <td>Format </td>
            <td>Paperback</td>
          </tr>
          <tr>
            <td>Number of pages </td>
            <td>324</td>
          </tr>
          <tr>
            <td>Dimensions </td>
            <td>8 x 5 x 1 inches</td>
          </tr>
          <tr>
            <td>Weight </td>
            <td>11.2 Ounces</td>
          </tr>
        </table>
        <br>
        <br>
        <h5>ID Numbers</h5>
        <table>
          <tr>
            <td>Open Library </td>
            <td>OL8876573M</td>
          </tr>
          <tr>
            <td>Internet Archive</td>
            <td><a href="#">simonlazarus00maki</a></td>
          </tr>
          <tr>
            <td>ISBN 10 </td>
            <td>1594530165</td>
          </tr>
          <tr>
            <td>ISBN 13 </td>
            <td>9781594530166</td>
          </tr>
        </table>

      </div>

      <div class="col-md-3 borrow-area-outer">
        <div class="container borrow-area">
          <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Borrow Now</button>
        </div>
      </div>


    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Book Issue | Book : Simon Lizarus </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <p>Date: <span id="datee"><span></p>
            <div class="row">
              <div class="col-md-6">
                <img src="https://covers.openlibrary.org/b/id/872638-M.jpg" height="300px" width="200px"/>
              </div>
              <div class="col-md-6">
                <h1>Summary</h1>
                <h4>Simon Lizarus</h4>
                <p>Gram and my mother, Nancy, want me to come home for
                  my sister's 16th birthday party when the spring semester ends, which is in about two and a half months.
                </p>

              </div>
          </div>

          <script>
          var d = new Date('2019-06-11');
          document.getElementById("datee").innerHTML = d;
          </script>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="/HCI%20Project/dashboard.php"><button type="button" class="btn btn-primary">Confirm</button></a>
        </div>
      </div>
    </div>
  </div>

<?php include("footer.php"); ?>
