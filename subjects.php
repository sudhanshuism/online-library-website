<?php include("nav-3.php");?>

<?php $authors = array(
  "Art"=>array('Architecture','Art Instruction','Art History','Dance,Design','Fashion','Film','Graphic Design','Music','Music Theory','Painting','Photography'),
  "Fiction" =>array('Historical Fiction','Horror','Humor','Literature','Magic','Mystery and detective stories','Plays','Poetry','Romance','Science Fiction','Short Stories','Thriller','Young Adult')
)
?>
<div class="container subject-list">
    <div class="row subjects-outer">
      <div class="col-md-4">
        <div class="subjects container">
          <?php
          echo '<ul class="list-group">';
            foreach($authors as $key => $value){

                echo '<br><li class="list-group-item active"><b>'.$key.'</b></li><br>';
                for($i=0;$i<sizeof($value);$i++){

                echo '<li class="list-group-item">'.$value[$i].'</li>';

                }

            }
          echo "</ul>";
           ?>
        </div>

      </div>
        <div class="col-md-4">
          <div class="subjects container">
            <?php
            echo '<ul class="list-group">';
              foreach($authors as $key => $value){

                  echo '<br><li class="list-group-item active"><b>'.$key.'</b></li><br>';
                  for($i=0;$i<sizeof($value);$i++){

                  echo '<li class="list-group-item">'.$value[$i].'</li>';

                  }

              }
            echo "</ul>";
             ?>
          </div>
        </div>


    <div class="col-md-4">
      <div class="subjects container">
        <?php
        echo '<ul class="list-group">';
          foreach($authors as $key => $value){

              echo '<br><li class="list-group-item active"><b>'.$key.'</b></li><br>';
              for($i=0;$i<sizeof($value);$i++){

              echo '<li class="list-group-item">'.$value[$i].'</li>';

              }

          }
        echo "</ul>";
         ?>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>
