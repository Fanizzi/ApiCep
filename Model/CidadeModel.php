<?php

namespace APICEP\Model;

use APICEP\DAO\EnderecoDAO;
use ApiCep\Model\Model;

class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadesByUf($uf)
    {
        $dao = new EnderecoDAO();

        $this->rows = $dao->selectCidadesByUf($uf);
    }
}