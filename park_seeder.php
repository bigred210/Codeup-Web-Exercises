<?php

require_once 'parks_credentials.php';
require_once 'db_connect.php';

      // will stop duplicate 
$truncate = 'TRUNCATE national_parks';
$dbc->exec($truncate);

      // array of $parks
$parks = [
    ['name' => 'Acadia', 'location' => 'MAINE 44.35N 68.21W', 'date_established' => 'February 26, 1919' , 'area_in_acres' => 47389.67, 'description' => 'THIS PLACE IS HOT'],
    ['name' => 'American Samoa', 'location' => 'American Samoa 14.25S 170.68W', 'date_established' => 'October 31, 1998' , 'area_in_acres' =>9000.00, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Arches', 'location' => 'UTAH 38.68N 109.57W', 'date_established' => 'April 12, 1929' , 'area_in_acres' => 76518.98, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Badlands',  'location' => 'SOUTH DAKOTA 43.75N 102.50W', 'date_established' => 'November 10, 1978', 'area_in_acres' => 242755.94, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Big Bend',  'location' => 'TEXAS 29.25N 103.25W', 'date_established' => 'June 12, 1944', 'area_in_acres' => 801163.21, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Biscayne',  'location' => 'Florida 25.65N 80.08W', 'date_established' => 'June 28, 1980','area_in_acres' => 172924.07, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado 38.57N 107.72W', 'date_established' => 'October 21, 1999' , 'area_in_acres' => 32950.03, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Bryce Canyon', 'location' => 'UTAH 37.57N 112.18W','date_established' => 'February 25, 1928' , 'area_in_acres' => 35835.08, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Canyonlands',  'location' => 'UTAH 38.2N 109.93W',   'date_established' => 'September 12, 1964' ,'area_in_acres' => 337597.83, 'description' => 'THIS PLACE IS HOT!'],
    ['name' => 'Capitol Reef', 'location' => 'Utah 38.20N 111.17W', 'date_established' => 'December 18, 1971' , 'area_in_acres' => 241904.26, 'description' => 'THIS PLACE IS HOT!']
];

$stmt = $dbc->prepare("INSERT INTO national_parks (name,location,date_established,area_in_acres,description) VALUES (:name, :location, :date_established, :area_in_acres, :description)");

foreach ($parks as $park)
{
    $stmt->bindvalue(':name', $park['name'], PDO::PARAM_STR); 
    $stmt->bindvalue(':location', $park['location'], PDO::PARAM_STR); 
    $stmt->bindvalue(':date_established', $park['date_established'], PDO::PARAM_STR); 
    $stmt->bindvalue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_INT);
    $stmt->bindvalue(':description', $park['description'], PDO::PARAM_STR);

    $stmt->execute();
}

//previous way to loop and execute
      // loops through $parks and inserts into national_parks table
// foreach ($parks as $park) {
//     $query = "INSERT INTO national_parks (name,location,date_established,area_in_acres,description) VALUES ('{$park['name']}', '{$park['location']}' , '{$park['date_established']}' , '{$park['area_in_acres']}', '{$park['description']}')";

//     $dbc->exec($query);
// };
