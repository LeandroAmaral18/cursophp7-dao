<?php

require_once("config.php");

$sql = new DAO();

$usuarios = $sql-> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>