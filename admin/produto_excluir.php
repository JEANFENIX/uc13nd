<?php 
include '../conn/connect.php';
$excludo = $conn->query("delete from tbprodutos where id_produto=" .$_GET['id_produto']);
header('location: produtos_lista.php');

?>