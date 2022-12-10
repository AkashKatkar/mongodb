<?php
    // Update one row
    $updateResult = $collection->updateOne(
        ['username' => 'test'],
        [
            '$set' => ['email' => 'akash@example.com'],
            '$currentDate' => ['lastModified' => true],
        ]
    );
    echo '<pre>';
    print_r($updateResult);
    echo '</pre><br/>';


    // Update multiple rows
    $updateResult = $collection->updateMany(
        ['username' => ['$in' => ['akash', 'admin']]],
        [
            '$set' => ['email' => 'akash@gmail.com', 'name' => 'Admin User'],
            '$currentDate' => ['lastModified' => true],
        ]
    );
    echo '<pre>';
    print_r($updateResult);
    echo '</pre><br/>';
?>