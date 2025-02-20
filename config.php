<?php

$db_servidor = 'Localhost';
$db_usuario = 'root';
$db_senha = '';
$db_nomeDB = 'db_clientes';

// Criando conexão com o banco
$conexao = new mysqli ($db_servidor, $db_usuario, $db_senha, $db_nomeDB);

// Verificação de possível erro na conexão
if ($conexao -> connect_errno) {
    echo "Erro";
} else {
    echo "Parabéns! Você agora está inscrito para receber novidades e coteúdos exclusivos!!!";
}

?>