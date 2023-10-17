<?php

// function olaSubrotina()
// {
//     echo "Hello World!<br>";
// }

// olaSubrotina();
// olaSubrotina();


function olaFuncao()
{
    return "Hello World!<br>";
}

echo olaFuncao();
$frase = olaFuncao();
echo strlen($frase);


/**
 *  NOTA
 *  Funções - precisa retonar um valor
 *  Subrotina - "função" que não retorna um valor - só executa alguma coisa
 */
