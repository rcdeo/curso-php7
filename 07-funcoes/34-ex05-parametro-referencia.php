<?php

$a = 10;
echo "$a <br>";

// & passagem de parâmetro por referência (muda o valor na variavél)
function trocaValor(&$b)
{
    $b += 50;
    return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;