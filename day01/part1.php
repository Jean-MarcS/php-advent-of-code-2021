<?php

$increase = 0;
$f = fopen(__DIR__ . '/day1.data', 'r');

$depth = intval(fgets($f));

while (!feof($f)) {
    $newdepth = intval(fgets($f));
    if ($newdepth != 0 && $newdepth > $depth) {
        $increase++;
    }
    $depth = $newdepth;
}

echo $increase . "\n";
