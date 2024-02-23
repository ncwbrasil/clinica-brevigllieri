<?php
require_once("parametros.php");
error_reporting(1);
date_default_timezone_set('America/Sao_Paulo');


define( 'MYSQL_HOST', 'bd-mogicomp.sytes.net' );
define( 'MYSQL_PORT', '3030' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', 'm0507c1106' );
define( 'MYSQL_DB_NAME', 'imc' );


try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';port=' . MYSQL_PORT . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
$PDO->exec("SET CHARACTER SET utf8");
$PDO->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );?>
