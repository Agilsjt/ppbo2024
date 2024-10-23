<?php


use App\Model\Pustaka\Publisher;
use App\View;


require_once 'vendor/autoload.php';


$publihser = new Publisher();
$publihser->detail(5);
View::json($publihser);