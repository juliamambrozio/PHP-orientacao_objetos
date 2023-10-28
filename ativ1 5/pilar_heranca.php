<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar de Herança</title>
    <?php
    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição do volante';
        }

    }

    class Moto extends Veiculo{
        public $contraPesoGuidão = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        } //inicia um objeto

        function empinar(){
            echo 'Empinar';
        }

    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerou';
    
        }

    }

   

    $carro = new Carro('ABC123', 'Branco');
    $moto = new Moto('FUE123', 'Preto');

    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo '</pre>';

    $carro->acelerar();
    echo '<br>';
    $moto->empinar();
    ?>
</head>
<body>
    
</body>
</html>