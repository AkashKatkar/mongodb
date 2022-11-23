<?php
    // Get Data
    $document = $collection->findOne(['username' => 'admin']);
    echo '<pre>';
    var_dump($document);
    echo '</pre><br/>';
?>