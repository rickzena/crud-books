<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */


require_once('functions.php'); 

if (isset($_GET['id'])){
    delete($_GET['id']);
} else {
    die("ERRO: ID não definido.");
}
?>