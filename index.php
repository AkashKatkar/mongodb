<?php
    include 'connect_db.php';
    require_once __DIR__ . '/Library/vendor/autoload.php';
    $collection = (new MongoDB\Client)->test->users;

    include 'insert_data.php';

    include 'fetch_data.php';
?>