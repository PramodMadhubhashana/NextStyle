<?php 

    require __DIR__ . '/../../vendor/autoload.php';

    $host = 'mongodb://localhost:27017';
    $dbname = 'testNextstyle';

    $mongoClient = new MongoDB\Client($host);

    $database = $mongoClient->$dbname;

    if($database) {
        echo "Connected to MongoDB database Successfully!.";
    }
    else{
        echo "Failed to connect to MongoDB";
    }
?>
