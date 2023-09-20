<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>

<?php

/**
 *  FOREACH: USADO P/PERCORRER ARRAY E COLEÇÕES
 *  
 *  $meses = array(
 *      "Janeiro", "Fevereiro", "Março", 
 *      "Abril", "Maio", "Junho",
 *      "Julho", "Agosto", "Setembro", 
 *      "Outubro", "Novembro", "Dezembro"
 *  );
 *  
 *  foreach ($meses as $index => $mes) {
 *      echo "Indice: ".$index."<br>";
 *      echo "O mês é: ".$mes."<br><br>";
 *  } 
 */

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value . "<br>";
        echo "<hr>";
    }
}

?>