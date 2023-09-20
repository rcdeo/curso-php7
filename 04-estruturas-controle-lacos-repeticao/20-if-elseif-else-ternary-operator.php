<?php

$qualASuaIdade = 89;

$idadeAdolescente = 12;
$idadeAdulto = 18;
$idadeIdoso = 65;


if ($qualASuaIdade < $idadeAdolescente) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeAdulto) {
    echo "Adolescente";
} else if ($qualASuaIdade < $idadeIdoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

/**
 *  OPERADOR TERNÁRIO
 *  (condicional) ? (verdadeiro) : (falso);
 */
echo ($qualASuaIdade < $idadeAdulto) ? "Menor de Idade" : "Maior de Idade";