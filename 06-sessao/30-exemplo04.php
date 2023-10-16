<?php

session_id("277jc59f7jufvj2nhr0bldmv73");

require_once("29-config.php");

session_regenerate_id(); // usar na pagina de login

echo session_id();

var_dump($_SESSION);
