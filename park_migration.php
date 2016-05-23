<?php

require_once 'parks_credentials.php';
require_once 'db_connect.php';

    // will delete table if existed and create a new one
$drop_table = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($drop_table);

    // create table and define columns
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(200),
    location VARCHAR(100),
    date_established VARCHAR(10),
    area_in_acres double,
    description TEXT,
    PRIMARY KEY (id)
)';
$dbc->exec($query);




