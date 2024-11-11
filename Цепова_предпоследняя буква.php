<?php
function predposledniy(string $str) {
    if (strlen($str) > 1) {
        echo $str[strlen($str) - 2];
    } else {
        echo "\nСтрока слишком короткая\n";
    }
}

predposledniy("Hello");
predposledniy("H");
