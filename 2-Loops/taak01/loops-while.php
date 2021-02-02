<?php
  $leeftijd = 0;
?>
<html>

  <body>
    <ul>
    <?php
     while($leeftijd < 18)
     {
         echo "Ik ben " . $leeftijd . " jaar, dus ik mag nog niet stemmen. <br>";
         $leeftijd++;
     }
     echo "Ik ben 18 jaar oud dus ik heb stemrecht!";
    ?>
    </ul>
  </body>

</html>