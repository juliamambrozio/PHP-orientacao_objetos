<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <?php
        interface EquipamentoEletronicoInterface{
            public function ligar();
            public function desligar(); //quem decide o que vai acontecer são os objetos, não pode coloca private e protected      
        }

        class Geladeira implements EquipamentoEletronicoInterface{
            public function abrirPorta(){
                echo 'Abrir a porta';
            }

            public function ligar(){
                echo 'Ligar';
            } //deve implementar obrigatóriamente 

            public function desligar(){
                echo 'Desligar';
            }

        }

        class Tv implements EquipamentoEletronicoInterface{
            public function trocarCanal(){
                echo 'Trocar canal';
            }
            public function ligar(){
                echo 'Ligar';
            }

            public function desligar(){
                echo 'Desligar';
            }

        }

        $x = new Geladeira();
        $y = new TV();

        $x->ligar();
        $y->desligar();

        //---------------------------------


        interface MamiferoInterface{
            public function respirar();
        }
        interface TerrestreInterface{
            public function andar();
        }
        interface AquaticoInterface{
            public function nadar();
        }

        class Humano implements MamiferoInterface, TerrestreInterface{

            public function respirar(){
                echo 'Respirar';
            }

            public function andar(){
                echo 'Andar';
            }

        }

        class Baleia implements AquaticoInterface, MamiferoInterface{
            public function respirar(){
                echo 'Respirar';
            }

            public function nadar(){
                echo 'Nadar';
            }
        }

        //---------------------------------

        interface AveInterface{
            public function voar();
        }

        interface AnimalInterface extends AveInterface{
            public function comer();
        }

        class Papagaio implements AnimalInterface{
            public function comer(){
                echo 'Comer';
            }
            public function voar(){
                echo 'Voar';
            }
        }

        $p = new Papagaio();
        echo $p->comer();
    ?>
</head>
<body>
    
</body>
</html>