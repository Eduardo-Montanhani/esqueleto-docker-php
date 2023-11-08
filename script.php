<?php

use Unialfa\DatabaseConnection;

require_once 'vendor/autoload.php';

$host = "mysqlunialfa";
$port = "3307";
$username = "root";
$password = "root";
$dbname = "pedidos";

$db = new DatabaseConnection($host, $port, $username, $password, $dbname);

$query = "SELECT * FROM pedido p WHERE p.movimentacao = 0";
$pedidosPendentes = $db->query($query);

foreach ($pedidosPendentes->fetchAll(PDO::FETCH_OBJ) as $pedidosPendentes) {
    $query = "UPDATE pedido SET movimentacao = 1 WHERE id = $pedidosPendentes->id;";
    $db->query($query);
}

file_put_contents('log.log', print_r([
    "idpedido" => $pedidoPendendte->id,
    "mensagem" => "Atualizando com sucesso"
], true), FILE_APPEND);
