<?php
    // Insert one record
    $insertOneResult = $collection->insertOne([
        'username' => 'akash',
        'email' => 'akash@gmail.com',
        'name' => 'Admin User',
    ]);
    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    echo '<br/><pre>';
    var_dump($insertOneResult->getInsertedId());
    echo '</pre><br/>';

    // Insert many records
    $insertManyResult = $collection->insertMany([
        [
            'username' => 'admin',
            'email' => 'admin@example.com',
            'name' => 'Admin User',
        ],
        [
            'username' => 'test',
            'email' => 'test@example.com',
            'name' => 'Test User',
        ],
    ]);
    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
    echo '<br/><pre>';
    var_dump($insertManyResult->getInsertedIds());
    echo '</pre><br/>';
?>