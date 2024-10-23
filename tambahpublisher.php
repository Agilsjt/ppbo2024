<?php

use App\Model\Pustaka\Publisher;
use App\View;

require_once 'vendor/autoload.php';

$publisher = new Publisher();
$publisher->id = 5;
$publisher->name = 'Penerbit Tanjungpura';
$publisher->address = 'Jl. Ahmad Yani, Pontianak';
$publisher->phone = '+6282159899734';
View::json($publisher->save());
