<?php

session_start();

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

}
);

$f3->route('GET /jewelry/rings/toe-rings', function() {

    //$views = new View;
    //echo $views->render ('views/home.html');

    $template = new Template();
    echo $template -> render('views/toe-rings.html');

}
);

$f3->route('GET /hello/@name', function($f3, $params) {

    //$name = $params['name'];
    //echo"<h1>Hello, $name</h1>";

    $f3-> set('name', $params['name']);
    $template = new Template();
    echo $template->render('views/hello.html');

}
);

$f3->route('GET /hello/@name', function($f3, $params) {

    //$name = $params['name'];
    //echo"<h1>Hello, $name</h1>";

    $f3-> set('name', $params['name']);
    $template = new Template();
    echo $template->render('views/hello.html');

}
);

$f3->route('GET /hello/@first/@last', function($f3, $params) {

    //$name = $params['name'];
    //echo"<h1>Hello, $name</h1>";

    $f3-> set('first', $params['first']);
    $f3-> set('last', $params['last']);
    $f3-> set('message', "Hi!");

    $_SESSION['first'] = $f3->get('first');
    $_SESSION['last'] = $f3->get('last');

    $template = new Template();
    echo $template->render('views/hi.html');

}
);

$f3->route('GET /hi-again', function($f3, $params) {

    echo 'Hi Again, '.$_SESSION['first'];

}
);




$f3->run();