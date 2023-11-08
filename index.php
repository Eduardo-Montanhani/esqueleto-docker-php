<?php

use Unialfa\DatabaseConnection;

require_once 'vendor/autoload.php';

$host = "mysqlunialfa";
$port = "3307";
$username = "root";
$password = "root";
$dbname = "pedidos";

$db = new DatabaseConnection($host, $port, $username, $password, $dbname);

$query = "SELECT * FROM pedido";
$result = $db->query($query);
print_r($result->fetchAll(PDO::FETCH_OBJ));

$db->closeConnection();