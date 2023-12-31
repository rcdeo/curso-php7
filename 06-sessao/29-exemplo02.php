<?php

require_once("29-config.php");
unset($_SESSION['nome']); // apaga o valor da SESSION
echo $_SESSION["nome"]; // usa o valor da SESSION

/**
 *  NOTA
 *  No exemplo-02.php criado nesta aula, os professores mostram a função session_unset($_SESSION['nome'])
 *  Entretanto, isso pode gerar um erro em seu código pois essa função não espera parâmetros. Ela libera todas as variáveis de sessão.
 *  Para excluir uma variável específica, devemos executar unset($_SESSION['nome'])
 *  Bons estudos a todos :)
 */
