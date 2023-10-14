<?php

$conexao = mysqli_connect('localhost', 'root', 'usbw', 'bdexemplo');
mysqli_set_charset($conexao, 'utf8');
if ($conexao->connect_error) {
die("Falha ao realizar a conexão: " . $conexao->connect_error);

} 

?>