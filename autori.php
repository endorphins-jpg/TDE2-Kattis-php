<?php

$autori = explode("-", fgets(STDIN));

foreach ($autori as $abbrev) {
    print($abbrev[0]);
}
?>