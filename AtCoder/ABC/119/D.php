<?php

fscanf(STDIN, '%d %d %d', $A, $B, $Q);

$shrines = [];
for ($i = 1; $i <= $A; ++$i) {
    $shrines[] = (int)trim(fgets(STDIN));
}

$temples = [];
for ($j = 1; $j <= $B; ++$j) {
    $temples[] = (int)trim(fgets(STDIN));
}

$points = [];
for ($k = 1; $k <= $Q; ++$k) {
    $points[] = (int)trim(fgets(STDIN));
}

foreach ($points as $point) {
    $shrine_diff = [];
    foreach ($shrines as $shrine) {
        $shrine_diff = $shrine - $point;
    }
    
    $temple_diff = [];
    foreach ($temples as $temple) {
        $temple_diff = $temple - $point;
    }
    
    if (in_array(0, $shrine_diff)) {
        
    }
    
    if (in_array(0, $temple_diff)) {
        
    }
    
    
}