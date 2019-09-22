<?php

$array = array('country' => '', 'city' => '');

$amount = readline("Hoeveel landen ga je toevoegen? ");

for ($i = 1; $i <= $amount; $i++) {

    echo "Welk land wil je toevoegen? \n";

    $country = readline();

    echo "Wat is de hoofdstad van " . $country . "\n";

    $city = readline();

    $array[] = $country . ", " . $city;
}

echo "De volgende landen en steden zitten in de database";

foreach ($array as $value) {
    echo $value . "\n";
}
