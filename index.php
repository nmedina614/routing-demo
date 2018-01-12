<?php

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();


$f3->route('GET /', function() {

    //$views = new View;
    //echo $views->render ('views/home.html');

    echo '<h1>Routing Demo</h1>';

}
);


$f3->run();