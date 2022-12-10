<?php
    include 'connect_db.php';
    require_once __DIR__ . '/Library/vendor/autoload.php';
    $collection = (new MongoDB\Client)->test->users;

    die('<h3 style="font-family: sans-serif;color: #F05969;text-align: center;">Please Remove Comments</h3>');

    // include 'insert_data.php';

    // include 'fetch_data.php';

    // include 'update_data.php';

    // include 'delete_data.php';
?>