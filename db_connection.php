<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$query = new MongoDB\Driver\Query([]);
$cursor = $manager->executeQuery('mydb.users', $query);

foreach ($cursor as $document) {
    var_dump($document);
}

?>