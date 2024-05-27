<?php
session_start();

define("DBHOST", "localhost");
define("DBUSERNAME", "root");
define("DBPASSWORD", "");
define("DBNAME", "forms_joao");
function getConexao()
{
    $conexao = new mysqli(DBHOST, DBUSERNAME, '', DBNAME);

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    return $conexao;
}
