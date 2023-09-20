<?php

/**
 *  O escopo {} de uma variável é o contexto onde foi definida.
 *  A maioria das variáveis do PHP tem somente escopo local. Este escopo local inclui os arquivos incluídos e requeridos.
 */

$nome = "Glaucio"; // escopo global

function teste()
{
    echo $nome; // referencia uma variável do escopo local (não definida)
}

function teste1()
{
    global $nome; // use a plavra-chave GLOBAL ​​(dentro da função) para acessar uma variável de escopo global
    echo $nome . " teste1 - nome escopo global";
}

function teste2()
{
    $nome = "João";
    echo $nome . "  teste2 - nome escopo local";
}

teste();
echo "<br>";

teste1();
echo "<br>";

teste2();
echo "<br>";