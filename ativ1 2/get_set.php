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

        //getter e setters

        function setNome($nome){
            $this->nome = $nome; //this para o atributo do objeto

        }

        function setnumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;

        }

        function getNome(){
            return $this->nome;
        }
        function getnumFilhos(){
            return $this->numFilhos;
        }
        
        
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
    $y->setNome('José');
    $y->setnumFilhos(2);
    echo $y-> resumirCadFunc();

    echo '</br>';
    
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setnumFilhos(1);
    echo $x-> resumirCadFunc();
    
    
    ?>
</head>
<body>
    
</body>
</html>