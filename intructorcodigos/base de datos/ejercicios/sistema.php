<?php

require_once ("autoload.php");

$insertUser = new Usuario();

$create = $insertUser -> insert ("pablo","322254","pablo@into.com","madrid");
print_r($create);

?>