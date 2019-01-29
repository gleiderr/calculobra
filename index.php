<?php 
//https://tableless.com.br/composer-para-iniciantes/
//https://tableless.com.br/entendendo-o-padrao-mvc-na-pratica/
header('Content-type: text/html; charset=utf-8');
require_once 'vendor/autoload.php';

$controller = new App\Mvc\Controller();
$controller->index();