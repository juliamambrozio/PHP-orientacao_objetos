<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar da Abstração</title>
    <?php

    //modelo

    class Funcionario{
        //atributos
        public $nome =  'José';
        public $telefone = '11 8888-8888';
        public $numFilhos = 2;
        
        //métodos

        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos";
        }
        function modificarNumFilhos($numFilhos){
            //afetar um atributo de objeto
            $this->numFilhos = $numFilhos; //var do contexto objeto e var do contexto da função


        }

        
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    $y->modificarNumFilhos(3);
    echo '</br>';
    echo $y->resumirCadFunc();
    echo '<hr>';
    $x = new Funcionario();
    echo '</br>';
    echo $y->resumirCadFunc();
    echo '</br>';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
    ?>
</head>
<body>
    
</body>
</html>