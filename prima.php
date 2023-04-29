<?php
function prima()
{
    for ($k = 1; $k <= 100; $k++) {
        $i = 0;
        for ($l = 1; $l <= $k; $l++) {
            if ($k % $l == 0) {
                $i++;
            }
        }
        if ($i == 2) {
            echo $k . " adalah bilangan prima<br>";
        }
}
}

prima();