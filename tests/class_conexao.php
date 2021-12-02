<?php
include "../src/cadastro-empreendimento/conexao.php";

if (!$conexao){
    die("Não foi possível conectar " . mysqli_connect_error());
mysqli_select_db($conexao, $banco) or die("Erro ao selecionar banco " . mysqli_connect_error());
}

else 
echo "Conectado com sucesso!";
?>
