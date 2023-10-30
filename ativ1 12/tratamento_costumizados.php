<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamento customizado</title>
    <?php

    class MinhaExceptionCustomizada extends Exception{
        private $erro = '';
        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            return $this->erro;
        }
    }


        try{
            throw new MinhaExceptionCustomizada('Esse é um erro de teste');
            //Error: erros internos do php
            //Exception: lançamentos de erros
            //Customizadas: lançamentos de erros mais personalizados
        } catch(MinhaExceptionCustomizada $e){
            echo $e->exibirMensagemErroCustomizada();

        }
    ?>
</head>
<body>
    
</body>
</html>