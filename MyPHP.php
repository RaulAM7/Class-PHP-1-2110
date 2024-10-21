<?php
    
    //Para comentar una linea
    /* Para comentar multilinea
    */

    //Para printear
    echo 'Hello world'.PHP_EOL;

    //Para definir variables
    $myvariable = 'Soy una variable';
    echo $myvariable.PHP_EOL;

    define('MY_CONSTANT', 'My value.'); 

    const MY_CONSTANT2 = 20;

    echo MY_CONSTANT.PHP_EOL;
    echo MY_CONSTANT2.PHP_EOL;

    //CONSTANTES PREFIJADAS EN PHP

    echo PHP_INT_MAX.PHP_EOL;
    echo PHP_INT_MIN.PHP_EOL;
    echo 'Size maxima: ';
    echo PHP_INT_SIZE.PHP_EOL;

    //Métodos

    //Echo para printear
    echo "Soy un metodo echo", PHP_INT_MAX.PHP_EOL;

    //var_dump -> para printear pero mejor
    var_dump(MY_CONSTANT2).PHP_EOL;

    //is_datatype -> para retornar true or false si es de un datatype concreto
    var_dump((is_int(MY_CONSTANT2))).PHP_EOL;
    var_dump((is_float(MY_CONSTANT2))).PHP_EOL;
    var_dump((is_string(MY_CONSTANT2))).PHP_EOL;

    //gettype -> para que nos retorne el data type de una variable
    var_dump(gettype(MY_CONSTANT2)).PHP_EOL;
    var_dump(gettype(MY_CONSTANT)).PHP_EOL;






    //Data Types

    //1.- Strings
    $mystring = 'Soy un string';
    echo $mystring.PHP_EOL;

    //2.- Integresers
    $myINT = 30;
    echo $myINT.PHP_EOL;

    //3.- Float
    $myFLOAT = 3.14;
    echo $myFLOAT.PHP_EOL;

    //3.- Booleans
    $myBoolean = true;
    echo $myBoolean.PHP_EOL;

