<?php
include "apartje.php";

$mijngegevens = array(
    "naam" => "Milo", 
    "leeftijd" => "18", 
    "woonplaats" => "Amsterdam", 
    "huisdier" => "kat");

function maakRij($mijngegevens)
{
    echo "<h1>Gegevens</h1>
    <table class = 'gegevens'>
    <thead>
    <tr>";

    foreach($mijngegevens as $info => $info2)
    {
        echo "<th>" . $info . "</th>";
    }
    
    echo
    "</tr>
    </thead>
    <tbody>
    <tr>";

    foreach($mijngegevens as $info => $info2)
    {
        echo "<td>" . $info2 . "</td>";
    }
                    
    echo 
    "</tr>
    </tbody>
    </table>";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eindopdracht PHP Pagina 2</title>
        <style>
            body
            {
                background-color: <?php
                    $background = $_POST["back"];
                    switch($background)
                    {
                        case "red" :
                            echo "red";
                        break;

                        case "blue" :
                            echo "blue";
                        break;

                        case "green" :
                            echo "green";
                        break;

                        case "black" :
                            echo "black";
                        break;

                        case "brown" :
                            echo "brown";
                        break;

                        default :
                            echo "yellow";
                        break;
                    }
                    ?>;
                    
                color: <?php
                    $color = $_POST["colors"];
                    switch($color)
                    {
                        case "red" :
                            echo "red";
                        break;

                        case "blue" :
                            echo "blue";
                        break;

                        case "green" :
                            echo "green";
                        break;

                        case "black" :
                            echo "black";
                        break;

                        case "brown" :
                            echo "brown";
                        break;

                        default :
                            echo "yellow";
                        break;
                    }
                    ?>;
            }

            table
            {
                border: <?php echo $_POST["dikte"]; ?>px;
                padding-left: <?php echo $_POST["padding"]; ?>px;
                text-align: center;
                width: 100%;
            } 

            th, td
            {
                font-family: 'Rock Salt', cursive;
                border: 1px solid #000;
                letter-spacing: 1px;
                padding: 0.5rem;
            }

            h1 {
                font-family: 'Rock Salt', cursive;
                border: 1px solid #000;
                text-align: center;
                width: 100%;
                margin-right: 100%;
            }          
        </style>
    </head>

    <body>
    <h1>Tabel</h1>
        <table class = "gegevens">
            <thead>
                 <tr>
                    <th>Tekstkleur</th>
                    <th>Achtergrondkleur</th>
                    <th>Tabeldikte</th>
                    <th>Padding</th>
                </tr>
             </thead>
            <tbody>
                <tr>
                     <td><?php echo $_POST["colors"]; ?></td>
                     <td><?php echo $_POST["back"]; ?></td>
                     <td><?php echo $_POST["dikte"]; ?></td>
                     <td><?php echo $_POST["padding"]; ?></td>
                 </tr>
             </tbody>
        </table>
        <?php
        maakRij($mijngegevens);
        ?>
    </body>
</html>