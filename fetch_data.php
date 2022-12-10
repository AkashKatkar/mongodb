<?php
    // Get Data
    $document = $collection->findOne(['username' => 'admin']);
    echo '<span style="font-size: 1.1rem;color: #F05969;font-weight: bold;font-family: sans-serif;">Fetch signle row</span><br/><pre>';
    var_dump($document);
    echo '</pre><br/>';
    
    echo '<span style="font-size: 1.1rem;color: #F05969;font-weight: bold;font-family: sans-serif;">IN Operator</span><br/><pre>';
    $documents = $collection->find(['username' => ['$in' => ['admin', 'akash']]]);
    foreach($documents as $document){
        print_r($document);
    }
    echo '</pre><br/>';

    
    echo '<span style="font-size: 1.1rem;color: #F05969;font-weight: bold;font-family: sans-serif;">OR Operator</span><br/><pre>';
    $documents = $collection->find(['$or' => [['username' => 'admin'], ['email' => 'akash@gmail.com']]]);
    foreach($documents as $document){
        print_r($document);
    }
    echo '</pre><br/>';
?>