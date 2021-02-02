<?php
function rekenUit($int, $double, $float)
{
    $total = $int + $double + $float;

    return "Als ik de getallen $int, $double en $float bij elkaar optel krijg je $total! <br>";
}

echo rekenUit(1, 2.22, 1.1111);
echo rekenUit(532, 2.99, 1.1311);
echo rekenUit(22, 2.88, 1.1114);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP opdracht</title>
</head>
<body>
    <h1>Papegaaien soepa de brocollietjes.</h1>
</body>
</html>