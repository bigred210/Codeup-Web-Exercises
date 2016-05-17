<?php

USE parks_db;



$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db', 'codeup', 'codeup');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

DROP TABLE IF EXISTS albums;

$query = 'CREATE TABLE parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    artist VARCHAR(100),
    name VARCHAR(100),
    release_date YEAR(4),
    sales FLOAT,
    genre VARCHAR(50),
    PRIMARY KEY (id)
)';

$dbc->exec($query);