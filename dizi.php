<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$temizPlanets = array_filter($planets);
print_r($temizPlanets);

function generateNewSubArray($temizPlanets, $dimension) {
    $randomTemizlenmisDizi = array_map(function() use ($temizPlanets) {
        return $temizPlanets[array_rand($temizPlanets)];
    }, array_fill(0, $dimension, null));

    $uniqueArray=array_unique($randomTemizlenmisDizi);
   
    return $randomTemizlenmisDizi;
}

print_r(generateNewSubArray($temizPlanets, 5));
?>


