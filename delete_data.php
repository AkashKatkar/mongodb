<?php
    // Delete one row
    $deleteResult = $collection->deleteOne(['username' => 'test']);
    echo '<pre>';
    print_r($deleteResult);
    echo '</pre><br/>';

    // Delete multiple row
    $deleteResult = $collection->deleteMany(['username' => ['$in' => ['admin', 'akash']]]);
    echo '<pre>';
    print_r($deleteResult);
    echo '</pre><br/>';
?>