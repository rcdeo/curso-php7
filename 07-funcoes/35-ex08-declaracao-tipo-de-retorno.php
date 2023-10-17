<?php

/**
 *  DECLARAÇÃO DE TIPO DE RETORNO
 *  O PHP 7 adiciona suporte a declarações de tipo de retorno. Similar às declarações de tipo de argumento as declarações
 *  de tipo de retorno especificam o tipo do valor que será retornado por uma função. Os mesmos tipos estão disponíveis
 *  para declarações de tipo de retorno assim como estão disponíveis para declarações de tipo de argumentos.
 */

function soma(float ...$valores): string
{
    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";
