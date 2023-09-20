<?php

/**
 *  OPERADORES DE ATRIBUIÇÃO
 *  = atribuição
 *  . concatenação
 *  .= atribuição de concatenação
 *  
 *  OPERADORES ARITMÉTICOS
 *  + adição
 *  - subtração
 *  * multiplicação
 *  / divisão
 *  % módulo (resto da divisão)
 *  ** potenciação
 *  
 *  OPERADORES DE COMPARAÇÃO
 *  == igual (valor)
 *  === idêntico (tipo de dado e valor)
 *  != diferente ou <> diferente
 *  !== não idêntico
 *  < menor que
 *  <= menor ou igual
 *  > maior que
 *  >= maior ou igual 
 *  
 *  <=> spaceship (1, 0, -1)
 *  ?: operador ternário (condicional ? valor se verdadeiro : valor se falso)
 *  ?? coalescência nula (retorna o seguinte se o anterior for nulo)
 *  
 *  OPERADORES DE INCREMENTO/DECREMENTO
 *  ++$a PreIncrement
 *  $a++ PostIncrement
 *  --$a PreDecrement
 *  $a-- Postdecrement
 *  
 *  OPERADORES LÓGICOS
 *  && retorna true, se todas as condições verdadeiras
 *  || retorna true, se uma das condições verdadeira
 *   
 *  REFERÊNCIAS
 *  Operadores: https://www.php.net/manual/pt_BR/language.operators.php
 */

// OPERADORES DE ATRIBUIÇÃO
$nome = "Hcode";
echo $nome . " mais alguma coisa <br>";
$nome .= " Treinamentos <br>";
echo $nome;

$valorTotal  = 0;
$valorTotal += 100;
$valorTotal += 25;
$valorTotal -= 10; // desconto de R$ 10.00
$valorTotal *= .9; // desconto de 10%
echo "valorTotal: " . $valorTotal . "<br><br>";

// OPERADORES ARITMÉTICOS
$a = 10;
$b = 2;
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";
echo $a ** $b . "<br><br>";

// OPERADORES DE COMPARAÇÃO
$a1 = 55.0;
$b1 = 55;
var_dump($a1 > $b1);
echo "<br>";
var_dump($a1 < $b1);
echo "<br>";
var_dump($a1 == $b1);
echo "<br>";
var_dump($a1 === $b1);
echo "<br>";
var_dump($a1 != $b1);
echo "<br>";
var_dump($a1 !== $b1);
echo "<br><br>";

/** 
 *  SPACESHIP
 *  se "a" for maior que "b", resultado 1
 *  se "a" for igual a "b", resultado 0
 *  se "a" for menor que "b", resultado -1
 */
$a2 = 35;
$b2 = 60;
var_dump($a2 <=> $b2);
echo "<br><br>";

$a3 = NULL;
$b3 = 8;
$c3 = 10;
echo $a3 ?? $b3 ?? $c3;
echo "<br><br>";

// OPERADORES DE INCREMENTO/DECREMENTO
$a4 = 10;
echo ++$a4;
echo "<br>";
echo $a4;
echo "<br>";
echo --$a4;
echo "<br><br>";

// OPERADORES LÓGICOS E PRECEDÊNCIA DE OPERADORES
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado);