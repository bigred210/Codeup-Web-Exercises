<?php

require_once '../parks_credentials.php';
require_once '../db_connect.php';

// $stmt = $dbc->query('SELECT id, name, location FROM national_parks');



// $stmt = $dbc->query('SELECT * FROM national_parks');

// echo "Columns: " . $stmt->columnCount() . PHP_EOL;
// echo "Rows: " . $stmt->rowCount() . PHP_EOL;



$stmt = $dbc->query('SELECT * FROM national_parks');

echo "Columns: " . $stmt->columnCount() . PHP_EOL;
while ($row = $stmt->fetchALL(PDO::FETCH_ASSOC)) {
    print_r($row);
}



