<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método construtor e destrutor</title>
    <?php

    class Pessoa{
        public $nome = null;

        //quando instanciado
        function __construct($nome){
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __destruct(){
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this-> __get('nome'). ' está correndo';
        }

    }

    $pessoa = new Pessoa('Jorge');
    echo '</br>';
    echo $pessoa->__get('nome');
    echo '</br>';
    echo $pessoa->correr();
    echo '</br>';
    unset($pessoa); //remoção do objeto da memória (proposital)
    ?>
</head>
<body>
    
</body>
</html>