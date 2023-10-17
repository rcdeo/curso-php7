<?php

function ola($texto="World", $periodo)
{
    return "Hello $texto! $periodo!<br>";
}

echo ola("World","Bom dia");
echo ola("", "Boa noite");
echo ola("Gláucio", "Boa tarde");
echo ola("João", "");

/**
 *  NOTA
 *  Parâmetros ($texto, $periodo) - quando não possuir um valor default, colocar à esquerda. Caso contrário,
 *  sempre terá que informar o valor default ao utilizar a função.
 */