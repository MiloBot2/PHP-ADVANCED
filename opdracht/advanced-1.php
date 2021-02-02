<?php
require "apartje.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eindopdracht PHP</title>
    </head>

    <body>
       <form action="advanced-2.php" method="POST">
            <p>Tabeldikte: <input type="text" name="dikte"></p>
            <p>Padding: <input type="text" name="padding"></p>

            <?php
                kleuren();
                echo "<br>";
                backgroundColor();
                echo "<br>";
            ?>

            <br><br>
            <button type="sumbit">verstuur</button>
       </form>
    </body>
</html>