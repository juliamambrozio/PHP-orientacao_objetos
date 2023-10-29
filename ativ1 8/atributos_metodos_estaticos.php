<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atributos e métodos estáticos</title>
    <?php

    class Exemplo{
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1(){
            echo $this->$atributo2;
            echo 'Eu sou um método estático';

        } //não pode usar this

        public function metodo2(){
            echo 'Eu sou um método normal';

        }
    }

    $x = new Exemplo(); //quando trabalhamos com estáticos, não precisamos fazer a instância
   /*echo Exemplo::$atributo1;
    echo '</br>';
    Exemplo::metodo1(); */

    //echo Exemplo::$atributo2; //não pode acessar porque não é estático

    echo $x->atributo2;
    echo $x->atributo1;
    echo $x->metodo1();
    ?>
</head>
<body>
    
</body>
</html>