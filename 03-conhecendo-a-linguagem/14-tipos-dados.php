<?php

/**
 * REGRAS PARA VARIÁVEIS
 * - uma variável começa com o caractere $(cifrão), seguido do nome da variável
 * - um nome de variável DEVE começar com uma letra ou underscore
 * - um nome de variável NÃO PODE começar com um número
 * - um nome de variável PODE conter apenas caracteres alfanuméricos e sublinhados (A-z, 0-9 e _ )
 * - os nomes das variáveis são case-sensitive ($Valor e $valor são duas variáveis diferentes)
 * - $this é uma variável especial da linguagem e NÃO PODE ser atribuída
 */

$nome1        = "João";
$sobrenome    = "Rangel";
$nomeCompleto = $nome1 . " " . $sobrenome; // use ponto para concatenar

echo $nomeCompleto;
echo "<br>";

unset($nomeCompleto); // destrói a variável

// verifica se a variável é definida
if (isset($nomeCompleto)) {
    echo $nomeCompleto;
}

/**
 * TIPOS DE DADOS PRIMITIVOS
 * GRUPO 1: Tipos Básicos
 * - int/integer (número inteiro - entre -2.147.483.648 e 2.147.483.647)
 * - string (sequência de caracteres)
 * - float/double (números de ponto flutuante - com casas decimais)
 * - bool/boolean (verdadeiro ou falso)
 * GRUPO 2: Tipos Compostos
 * - array (uma matriz armazena vários valores em uma única variável)
 * - object (são estruturas que são criadas a partir das classes)
 * GRUPO 3: Especiais
 * - resource (armazenamento de uma referência a funções e recursos externos)
 * - null (não possui nenhum valor atribuído - por exemplo, uma chamada de banco de dados)
*/

// GRUPO 1: Tipos Básicos
$nome      = "Hcode";             // string
$site      = 'www.hcode.com.br';
$ano       = 1990;                // int
$salario   = 5500.99;             // float
$bloqueado = false;               // bool

// GRUPO 2: Tipos Compostos
$frutas = array("abacaxi", "laranja", "manga"); // array
echo $frutas[2];
echo "<br>";

$nascimento = new DateTime(); // object
var_dump($nascimento);
echo "<br>";

// GRUPO 3: Especiais
$arquivo = fopen("14-tipos-dados.php", "r"); // resource
var_dump($arquivo);
echo "<br>";

$nulo = NULL; // null
var_dump($nulo);
echo "<br>";