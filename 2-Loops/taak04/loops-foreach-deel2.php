<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
?>
<html>

    <body>
        <form>
        <ul>
            <?php
             foreach($klassen as $klas)
             {
                 echo "<li><input type='checkbox'>" . $klas . "</input></li>";
             }
            ?>
        </ul>
        <input type="submit">
        </form>
    </body>

</html>