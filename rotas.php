<?php

use ApiCep\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
    
    case '\endereco\by-cep':
        EnderecoController::getLogradouroByCep();
    break;

     case '\logradouro\by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
    break;

    case '\cidade\by-uf':
        EnderecoController::getCidadesByUf();
    break;

    case '\bairro\by-cidade':
        EnderecoController::getBairrosByIdCidade();
    break;

    default:
        http_response_code(403);
    break;
}