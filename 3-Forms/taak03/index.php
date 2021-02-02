<!DOCTYPE html>
<html>
    <head>
        <title>muziek</title>
    </head>
    <body>
        <h1 style="text-align: center;">Muziek</h1>
        <form action="mijnmuziek.php" method="GET">
            <p>Artiest: <input type="text" name="artiest"></p>
            <p>Titel: <input type="text" name="titel"></p>
            <p>Jaar: <input type="text" name="jaar"></p>
            <p>Genre: <input type="text" name="genre"></p>
            <input type="submit" name="submit" value="verstuur">
        </form>
    </body>
</html>