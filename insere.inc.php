<?php

include "conecta_mysql.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cidadeeestado = $_POST["cidade e estado"];
$comentarios = $_POST["comentarios"];

$sql = "INSERT INTO cadastro  VALUES ";
$sql .= "('$nome', '$email', '$telefone', '$cidadeeestado', '$comentarios')";

if ($conexao->query($sql) === TRUE) {
    echo "Novo usuário cadastrado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>