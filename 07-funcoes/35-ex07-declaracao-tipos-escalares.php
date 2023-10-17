<?php

/**
 *  DECLARAÇÃO DE TIPOS ESCALARES
 *  Declarações de tipos escalares vêm em dois sabores: coercivo (padrão) e estrito. Para parâmetros os seguintes
 *  tipos agora podem ser forçados (tanto coercivamente quanto estritamente): strings (string),
 *  inteiros (int), números de ponto flutuante (float) e booleanos (bool).
 */
function soma(int ...$valores)
{
    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";
