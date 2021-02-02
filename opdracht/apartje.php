<?php

function kleuren()
{
    $kleuren = array("red", "blue", "green", "black", "brown");

    echo "<label for='colors'> Kies een tekst kleur: </label>";
    echo "<select name='colors'> ";

    foreach($kleuren as $next)
    {
        echo "<option value='" . $next . "'>" . $next . "</option>";

    }

    echo "</select>";
}

function backgroundColor()
{
    $kleuren = array("red", "blue", "green", "black", "brown");

    echo "<label for='back'> Kies kleur </label>";
    echo "<select name='back'> ";

    foreach($kleuren as $next)
    {
        echo "<option value='" . $next . "'>" . $next . "</option>";

    }

    echo "</select>";
}

?>