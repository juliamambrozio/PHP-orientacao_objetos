<?php

namespace A;

class Cliente implements CadastroInterface{
    public $nome = 'Jorge';

    public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    } //criado na hora que é instanciado o objeto

    public function __get($attr){
        return $this->$attr;
    }

    public function salvar(){
        echo 'Salvar';
    }

    public function remover(){
        echo 'remover';
    }
}

interface CadastroInterface{
    public function salvar();  
}

?>