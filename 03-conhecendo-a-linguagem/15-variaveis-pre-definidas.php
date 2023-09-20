<?php

/**
 *  ARRAYS SUPERGLOBAIS OU VARIÁVEIS PRÉ-DEFINIDAS
 *  GET/POST (os dados vem por padrão como string, mas podem serem convertidos)
 *  Exemplo: url + ? (query string) + variável(a) = valor
 *  http://localhost:8000/03-conhecendo-a-linguagem/15-variaveis-pre-definidas.php?a=123&b=456
 */
$nome = (int)$_GET["a"]; // int (usado para converter os dados em inteiros)
var_dump($nome);
echo "<br>";

// $ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;