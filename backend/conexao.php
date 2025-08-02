<?php
$servername = "";
$username = "postgres";
$password = "123";
$database = "meubanco";

// Criar conexão


$link = pg_connect($servername, $username, $password, $database);

/* check connection */
if (pg_last_error()) {
    printf("Connect failed: %s\n", pg_last_error());
    exit();
}

?>
