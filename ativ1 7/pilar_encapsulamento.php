<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar do Encapsulamento</title>
    <?php

   /*  class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getNome(){
            return $this->nome;
        } //pode ser acessado pelo próprio objeto

        public function setNome($value){
            if(strlen($value) >= 3){
                $this->nome = $value;
            } //só irá alterar se for maior ou igual a 3
            
        }

    }

    $pai = new Pai();
    echo $pai->humor;
    $pai->humor = 'Triste';
    echo '<br>';
    $pai->setNome('Júlia');
    echo '<br>';
    echo $pai->humor;

    echo $pai->getNome(); //não pode ser acessado porque é privado */

    class Pai{
        private $nome = 'Jorge'; //privado do objeto pai
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr){
            return $this->$attr;
        } //não dá erro porque está sendo pego o valor do objeto

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo 'Assoviar'; //não pode executar porque é private
        }
        protected function responder(){
        echo 'Oi';
        }

        public function executarAcao(){

            $x = rand(1,10);
            if($x >= 1 && $x <= 8){
                $this->responder();
            }else{
                $this->executarMania(); //pode executar porque é public
            }
            
        }
    }

    class Filho extends Pai{
       public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
       } //objetos tem acesso aos seus atributos

       private function executarMania(){
            echo 'Assoviar'; //não pode executar porque é private
        }
    }

    /* $pai = new Pai();
    echo $pai->sobrenome;
    $pai->sobrenome = 'Oliveira';
    echo '<br>';
    echo $pai->sobrenome;

    $pai->executarAcao(); */

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->executarAcao(); //fica chamando o do pai porque é privado

   //O objeto privado só é exibido quando é colocado no objeto pai o get e o set

   //a aplicação possui acesso apenas aos objetos públicos

    



    ?>
</head>
<body>
    
</body>
</html>