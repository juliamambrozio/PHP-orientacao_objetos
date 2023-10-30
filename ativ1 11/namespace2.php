<?php 

    //INSERINDO BIBLIOTECAS DE CLASSES E CHAMANDO QUAL NAMESPACE EU QUERO
    require("lib1/lib1.php");
    require("lib2/lib2.php");


    //INDICAR QUAL EU QUERO INSTANCIAR


    use A\Cliente;

    $c = new CLiente();

    print_r($c);

    echo $c->__get('nome');

    use B\Cliente as C1; //as: utilizado para dar apelidos e assim não dar conflito quando chamar duas classes com mesmo nome

    $x = new C1();

    print_r($x);

    echo $x->__get('nome');



    

    

?>