<?php

/**
 *  Aspas Simples: texto, não processado
 *  Aspas Duplas : as variáveis são expandidas (interpolação)
 */

$nome  = "Hcode";
$nome2 = 'Treinamentos';
// var_dump($nome, $nome2);
echo "Asplas Duplas: $nome <br>";
echo 'Aspas Simples: $nome2 <br>'; // texto, não processado

// strtoupper — Converte uma string para maiúscula
// strtolower — Converte uma string para minúscula
// ucfirst    — Converte para maiúscula o primeiro caractere de uma string
// ucwords    — Converte para maiúscula o primeiro caractere de cada palavra
$usuario = "joao rangel";
$usuario = strtoupper($usuario);
echo $usuario;
echo "<br>";
$usuario = strtolower($usuario);
echo $usuario;
echo "<br>";
echo ucfirst($usuario);
echo "<br>";
echo ucwords($usuario);

// str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo "<br>";
echo $empresa;

// strpos — Encontra a posição da primeira ocorrência de uma string
// substr — Retorna uma parte de uma string
// strlen — Retorna o tamanho de uma string
$frase   = "A repetição é mãe da retenção.";
$palavra = "mãe";
$q       = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);
echo "<br>";
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto2);

$name     = 'Hcode Treinamentos';
$replace  = 'Cursos';
$newName = substr($name, 0, strpos($name, 'T')) . $replace;
echo "<br>";
echo $newName;

/**
 *  NOTA
 *  
 *  E aí galera, tudo bem?
 *  
 *  Nesta aula, no exemplo-04.php, os professores falam sobre a função strpos(), que encontra a posição de algum caractere em uma string.
 *  Também existe a função mb_strpos(), que encontra a posição de um caractere baseado na encodação UTF-8.
 *  
 *  Segue o link para mais informações: 
 *  https://secure.php.net/manual/pt_BR/function.mb-strpos.php
 *  
 *  Abraço e bons estudos :)
 */
