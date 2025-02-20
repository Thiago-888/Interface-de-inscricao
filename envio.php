<?php

// Verifica se o botão submit foi acionado e coleta os dados escritos pelo usuário nos campos

if (isset($_POST['submit'])) {
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];

// Envia os dados coletados para a tabela tb_inscritos

$resultado = mysqli_query($conexao, "INSERT INTO tb_inscritos(nome, email) VALUES ('$nome', '$email')");

}

?>