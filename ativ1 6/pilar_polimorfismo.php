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

        function trocarMarcha(){
            echo 'Desengatar embreagem com a mão e  e marcha com o pé';
        } //se herdar de forma errada, é só sobrescrever 

    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerou';
    
        }

        function freiar(){
            echo 'Freiar';
    
        }
        
        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e marcha com a mão';
        }

    }

    class Caminhao extends Veiculo{

    }

   

    $carro = new Carro('ABC123', 'Branco');
    $moto = new Moto('FUE123', 'Preto');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();

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