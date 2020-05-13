<?php include("nav-3.php");?>
<?php $authors = array(
  array("https://miro.medium.com/max/1000/1*03EKvinrjmN3Ru2HZkyA3A.jpeg","Agatha Christie"," If you are properly modest, you will never write at all, so there has to be one delicious moment when you have thought of something, know just how you are going to write it, rush for a pencil, and start in exercise book buoyed up with exaltation."),
  array("https://miro.medium.com/max/666/1*TchRh8gq09aTccUAL8zylg.png","Albert Camus","In the depth of winter, I finally learned that within me there lay an invincible summer."),
  array("https://miro.medium.com/max/1000/1*zu1D9-f2OPFY6xLECXnYUA.jpeg","Albert Einstein","Look deep into nature, and then you will understand everything better."),
  array("https://miro.medium.com/max/996/1*kCo9Z8-lI9adg04VJN8j9w.png","Alfred Hitchcock","Drama is life with the dull bits cut out.")
);?>
<div class="authors container">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Image </th>
        <th>Name </th>
        <th> Quote </th>
      </tr>
    </thead>
    <?php for($row=0;$row < sizeof($authors); $row++){

        echo '<tr>';
        echo '<td class="author-img"><img src="'.$authors[$row][0].'" height="150px" width="100px"></td>';
        echo '<td class="author-name">'.$authors[$row][1].'</td>';
        echo '<td class="author-desc">'.$authors[$row][2].'</td>';
        echo '</tr>';

    }
    ?>

  </table>

</div>

<?php include("footer.php"); ?>
