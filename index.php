<?php

include 'config.php';
include 'autoload.php';
include 'rotas.php';

$cidades = ['Jaú', 'Bariri', 'Itapuí', 'Dois Córregos'];

var_dump($cidades);


include 'Controller/Controller.php';

\ApiCep\Controller\Controller::getResponseAsJSON($cidades);