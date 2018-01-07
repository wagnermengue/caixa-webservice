<?php
/**
 * User: Wagner Mengue
 * Date: 01/2018
 * Version: 1.0
 *
 * Arquivo inicial que tem a função de importar as classes usadas e realizar uma chamada
 *
 */

include_once 'src/Dados.php';
include_once 'lib/Caixa.php';

$integracao = new Caixa((array)new Dados());
$integracao->realizarRegistro();
