<?php
error_reporting(E_WARNING && E_ERROR);
$increase = 0;
$f = fopen(__DIR__ . '/day1.data', 'r');


$cpt = -3;

while (!feof($f)) {
    $cpt++;
    $depth = intval(fgets($f));
    $mesure[$cpt] += $depth;
    $mesure[$cpt + 1] += $depth;
    $mesure[$cpt + 2] += $depth;
}

$depth = $mesure[0];
for ($i = 1; $i <= $cpt; $i++) {
    $newdepth = $mesure[$i];
    if ($newdepth != 0 && $newdepth > $depth) {
        $increase++;
    }
    $depth = $newdepth;
}

echo $increase . "\n";
