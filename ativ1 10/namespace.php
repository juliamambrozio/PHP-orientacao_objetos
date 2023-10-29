<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NameSpace</title>
    <?php
        namespace A;

        class Cliente implements \B\CadastroInterface {
            public $nome = 'Jorge';
    
            public function __construct() {
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre>';
            }
    
            public function __get($attr) {
                return $this->$attr;
            }
    
            public function salvar() {
                echo 'Salvar';
            }
    
            public function remover() {
                echo 'Remover';
            }
        }
    
        interface CadastroInterface {
            public function salvar();
        }
    
    
    
        namespace B;
    
        class Cliente implements \A\CadastroInterface {
            public $nome = 'Jamilton';
    
            public function __construct() {
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre>';
            }
    
            public function __get($attr) {
                return $this->$attr;
            }
    
            public function remover() {
                echo 'Remover';
            }
    
            public function salvar() {
                echo 'Salvar';
            }
        }
    
        interface CadastroInterface {
            public function remover();
        }
    
    
        //---------------
    
        $c = new \B\Cliente();
        print_r($c);
        echo $c->__get('nome');
    ?>
</head>
<body>
    
</body>
</html>