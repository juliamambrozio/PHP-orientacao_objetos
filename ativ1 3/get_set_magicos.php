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
        public $nome =  null;
        public $telefone =  null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getter e setters (overloading / sobrecarga)

        function __set($atributo, $valor){
            $this->$atributo = $valor;

        }

        function __get($atributo){
            return $this-> $atributo;

        }

        
        
        //métodos

        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos, tem o cargo de $this->cargo e recebe $this->salario";

            //Ou

            //return "$this->__get('nome') possui $this->__get('numFilhos')  filhos, tem o cargo de $this->__get('cargo') e recebe $this->__get('salario') "; (caso precise chamar métodos do próprio objeto internamente)
        }
        function modificarNumFilhos($numFilhos){
            //afetar um atributo de objeto
            $this->numFilhos = $numFilhos; //var do contexto objeto e var do contexto da função


        }

        
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos',2);
    $y->__set('cargo', 'Desenvolvedor');
    $y->__set('salario', '5000');
    echo $y-> resumirCadFunc();

    echo '</br>';
    
    $x = new Funcionario();
    $x->__set('nome','Maria');
    $x->__set('numFilhos',0);
    $x->__set('cargo', 'Design');
    $x->__set('salario', '4000');
    echo $x-> resumirCadFunc();
    
    
    ?>
</head>
<body>
    
</body>
</html>