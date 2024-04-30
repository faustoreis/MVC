<?php

class Model
{
    public $id;
    public $nome;

    public function __construct()
    {
        $this->id = '1111';
        $this->nome = 'Fran Reis';
    }

    /*
    Funções para acessar o banco de dados ou api externa
    regras de negocios
    set e get
    */

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
