<?php
    $db = pg_connect('host=localhost dbname=cakepp user=postgres password=postgres');
    if (!$db) {
        die("Failed to connected database: " . pg_connect_error());
    }
?>