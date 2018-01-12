<?php

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();


$f3 -> set('DEBUG', 3);
//define a page1 route


$f3->route('GET /', function() {

    //$views = new View;
    //echo $views->render ('views/home.html');

    echo '<h1>Routing Demo</h1>';

}
);


$f3->route('GET /page1', function() {

    //$views = new View;
    //echo $views->render ('views/home.html');

    echo '<h1>This is Page1</h1>';

}
);

$f3->route('GET /page2', function() {

    //$views = new View;
    //echo $views->render ('views/home.html');

    echo '<h1>i noe de wey</h1>';

}
);

$f3->route('GET /page1/subpage-a', function() {

    //$views = new View;
    //echo $views->render ('views/home.html');

    echo '<h1>*clucking*</h1>';

}
);


$f3->run();