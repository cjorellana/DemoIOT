<?php
$region = 'America/Guatemala';
date_default_timezone_set($region);

while (1) {
    echo date('h:i:s') . "\n";
    include 'codigoEmergencia.php';
    sleep(60);
    echo date('h:i:s') . "\n";
}
?>