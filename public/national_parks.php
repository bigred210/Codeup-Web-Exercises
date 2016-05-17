<?php

require_once '../functions.php';
require_once '../Input.php';
require_once '../parks_credentials.php';
require_once '../db_connect.php';

function pageController($dbc) 
{
    $data = [];
    $data['page'] = Input::has('page') ? Input::get('page') : 1;
    $offset = ($data['page']-1)*4;
    $stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset );
    $stmt->execute();
    $data['parks'] = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    if ($_POST)
    {
    $query = "INSERT INTO national_parks (name,location,date_established,area_in_acres,description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";
    $stmt = $dbc->prepare($query);
    $stmt->execute(array(':name' => Input::get('name'), ':location' => Input::get('location'), ':date_established' => Input::get('date_established'), ':area_in_acres' => Input::get('area_in_acres'), ':description' => Input::get('description')));
    }
    return $data;
}
extract(pageController($dbc));

?>
<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
    <meta charset="utf-8"> 
        <!-- bootstrap links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- custom css page-->
    <link rel="stylesheet" href="css/parks.css">
</head>
<body>
    <div class="jumbotron">
        <h1>National Parks</h1>
    </div> <!-- jumbotron end -->
    <div class="container">
        <div class="info row">
                <?php foreach ($parks as $park): ?>
                    <div class="col-xs-3" "col-sm-3" "col-md-3">
                    <h3><?= escape($park['name']) ?></h3>
                    <p>Location: <br> <?= escape($park['location']) ?></p>
                    <p>Established: <br> <?= escape($park['date_established']) ?></p>
                    <p>Acres: <br> <?= escape($park['area_in_acres']) ?></p>
                    <p>Description: <br> <?= escape($park['description']) ?></p>
                    </div> <!-- col end -->
                <?php endforeach; ?> 
        </div><!-- row ends --> 
        <div class="button row">
            <div class="back col-xs-6" "col-sm-6" "col-md-6">
                <?php if($page>=2): ?>
                    <a href="?page=<?= $page -1 ?>"><img src="/img/backarrow.png"></a>
                <?php endif; ?>
            </div><!-- col ends -->
            <div class="next col-xs-6" "col-sm-6" "col-md-6">
                <?php if($page<count($parks)): ?>
                    <a href="?page=<?= $page +1 ?>"><img src="/img/nextarrow.png"></a>
                <?php endif; ?>
            </div> <!-- col end -->
        </div><!-- row ends -->
         <div class="row blockqoute">
            <div class="col-xs-12" "col-sm-3" "col-md-12">
                <blockquote>America will never be destroyed from the outside. If we falter and lose our freedoms, it will be because we destroyed ourselves. <br> - Abraham Lincoln</blockquote> 
            </div> <!-- col end -->
        </div><!-- row ends -->
    </div> <!-- container ends --> 
    <div class="row form">
        <div class="col-xs-12" "col-sm-12" "col-md-12">
            <h1>Add a National Park</h1>
            <form method="POST" action="#">
                <input type="text" id="newpark" name="name" placeholder="Name">
                <input type="text" id="newpark" name="location" placeholder="Location">
                <input type="text" id="newpark" name="date_established" placeholder="Year Established">
                <input type="number" id="newpark" name="area_in_acres" placeholder="Area in acres">
                <input type="text" id="newpark" name="description" placeholder="Description">
                <input type="submit" value="add">
            </form><!-- form ends -->
        </div><!-- col ends -->
    </div><!-- form row form ends -->

        <!-- javascript begins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</body>
</html>