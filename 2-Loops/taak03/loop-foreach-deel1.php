<?php
  $dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
?>
<html>

  <body>
    <ul>
    <?php
      foreach($dagen as $dag)
      {
        echo "<li>" . $dag . "</li>";
      }  
    ?>
    </ul>
  </body>

</html>