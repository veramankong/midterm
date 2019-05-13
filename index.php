<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once("vendor/autoload.php");

//create an instance of the base class
$f3 = Base::instance();

//set array
$f3-set('checkboxes', array('This midterm is easy', 'I like midterms', 'Today is Monday'));

//turn on fat-free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {

    //display a view
    $view = new Template();
    echo '<div class="container shadow-lg mt-5 p-5">
        <h1>Midterm Survey</h1>

        <a class="btn" href="survey">Take my Midterm Survey</a>
    </div>';
});

//define a survey route
$f3->route('GET /survey', function() {

    //display a view
    $view = new Template();
    echo $view->render('views/survey.html');
});

//run fat-free
$f3->run();