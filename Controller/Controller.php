<?php

namespace ApiCep\Controller;

abstract class Controller
{
    public static function getResponseAsJSON($data)
    {
        header("Acess-Control-Allow-Origin: *");
        header("Content-type: application/json; charset=utf-8");
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Pragma: public");

        exit(json_encode($data));
    }
}