<?php

/**
 *  $pessoas = array();
 *  array_push($pessoas, array(
 *      'nome'  => 'joão',
 *      'idade' => 20
 *  ));
 *   array_push($pessoas, array(
 *      'nome'  => 'Glaucio',
 *      'idade' => 25
 *  ));
 *  echo json_encode($pessoas);
 */

$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); // sem true, vira objeto

var_dump($data);
