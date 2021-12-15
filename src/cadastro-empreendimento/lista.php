

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            table, th, td {
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
    <?php
        include "conexao.php";
        $select= "select* from empresa";
        $result= mysqli_query($conexao,$select);
        $Linhas = mysqli_num_rows($result);
        echo"<table><tr><th>situação</th><th>Nome Fantasia</th><th>CPF</th><th>CNPJ</th><th>Data de Incubação</th><th>Razão Social</th><th>ID do Endereço</th><th>Inscrição Estadual</th><th>CNAE</th><th>Logo</th><th>Comentario</th>";
        for($i=0; $i <= $Linhas; $i++ )
        {
            $registro = mysqli_fetch_row($result);
            $id = $registro[0];
            $tipo = $registro[1];
            $nomeFan = $registro[2];
            $cpf = $registro[3];
            $cnpj = $registro[4];
            $data_incubacao = $registro[5];
            $razao_social = $registro[6];
            $Endereco_id = $registro[7];
            $inscricao_estadual = $registro[8];
            $cnae = $registro[9];
            $logo = $registro[10];
            $comentario = $registro[11];

            echo"<tr><td>$tipo</td><td>$nomeFan</td><td>$cpf</td><td>$cnpj</td><td>$data_incubacao</td><td>$razao_social</td><td>$Endereco_id</td><td>$inscricao_estadual</td><td>$cnae</td><td>$logo</td><td>$comentario</td>";
        }

    ?>
    <footer>       
         <a href="../painel-administrativo/index.html"><button type="button">Voltar para o Painel</button></a>
         <a href="enderecos.php"><button type="button">ir para Endereços</button></a>
         <a href="contatos.php"><button type="button">ir para os Contatos da empresa</button></a>
    </footer>
    </body>
</html>
