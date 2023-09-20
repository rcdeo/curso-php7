<?php

/**
 *  WHILE
 *  while (condition is true) {
 *      code to be executed;
 *  }
 *  
 *  $condicao = true;
 *  while ($condicao) {
 *      $numero = rand(1, 10);
 *      if ($numero === 3) {
 *          echo "TRÊS!!!";
 *          $condicao = false;
 *      }
 *      echo $numero." ";
 *  }
 */

/**
 *  DO WHILE
 *  do {
 *      code to be executed;
 *  } while (condition is true);
 * 
 * Obs.: Enquanto a condição é verdadeira $total>100, será executado o $desconto.
 */
$total = 150;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;