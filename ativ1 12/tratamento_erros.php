<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamento de erros</title>
    <?php

        try { //encapsula todo o conteúdo que está sucetivo a um erro (pode ter vários)
            //tenha uma lógica que possa acontecer um erro
            echo '<h3>----Try-----</h3>';

            /* $sql = 'Select * from cliente';
            mysql_qury($sql);  */

            if(!file_exists('require_arquivo_a.php')){
                throw new Exception('O arquivo não está disponível'); //lançando erro
                //Exception e Error

            }

        } catch(Error $e) { //só passa pelo catch se tiver algum erro, $e = recebe o erro 
            echo '<h3>----Catch-----</h3>';
            //pode ser armazenado esse erro no BD para ser analizado depois
            echo '<p>' . $e . '</p>';
        }catch(Exception $e){
            echo '<h3>----Catch Exception-----</h3>';

            echo '<p>' . $e . '</p>';

        }finally{ //instrução opcional caso já tenha o catch
            echo '<h3>----Finally-----</h3>';
        }

       
    ?>
</head>
<body>
    
</body>
</html>