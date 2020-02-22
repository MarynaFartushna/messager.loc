<?php

//phpinfo();

//This path should point to Composer's autoloader from where your MongoDB library will be loaded
require 'vendor/autoload.php';


// when using default settings
try {
    $mongo = new MongoDB\Client('mongodb://localhost:27017');

    $db = $mongo->selectDatabase('msgs');

    print_r($mongo->listDatabases());
} catch (Exception $e) {
    echo $e->getMessage();
}
  ?>

<?php

$doc = array(
    "name" => "MongoDB test name",
    "info" => (object)array( "x" => 203, "y" => 102),
    "versions" => array("0.9.7", "0.9.8", "0.9.9")
);

$connection = new MongoClient();
$collection = $connection->msgs->screens;

//$collection->insert( $doc );

?>

<?php

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->msgs->screens;

//$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );



$result = $collection->find(  );

foreach ($result as $entry) {
    var_dump($entry);
}


?>






