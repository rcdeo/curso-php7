<?php

/**
 *  include (alerta)            : tenta funcionar mesmo que o arquivo não exista ou tenha problema.
 *  require (erro fatal)        : arquivo deve existir e estar funcionando corretamente, do contrário, gera uma exceção, que pode ser tratada com tray catch.
 *  include_once ou require_once: inclui apenas uma vez o arquivo.
 */

// include "19-funcao.php";
require_once "19-funcao.php";
require_once "19-funcao.php";

$resultado = somar(10, 25);
echo $resultado;