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
        $select= "select* from endereco";
        $result= mysqli_query($conexao,$select);
        $Linhas = mysqli_num_rows($result);
        
        //Select para pegar razão social da Empresa
        $select2= "select* from empresa";
        $result2= mysqli_query($conexao,$select2);
        $Linhas2 = mysqli_num_rows($result2);
        
        echo"<table><tr><th>Razão Social</th><th>Cep</th><th>Rua</th><th>Número</th><th>Complemento</th><th>Bairro</th><th>Município</th>";
        for($i=0; $i <= $Linhas; $i++ )
        {
            $registro = mysqli_fetch_row($result);
            $id = $registro[0];
            $cep = $registro[1];
            $rua = $registro[2];
            $numero = $registro[3];
            $complemento = $registro[4];
            $bairro = $registro[5];
            $municipio = $registro[6];
           
            //Registro da Tabela Empresa
            $registro2 = mysqli_fetch_row($result2);
            $razao_social = $registro2[6];
            echo"<tr><td>$razao_social</td><td>$cep</td><td>$rua</td><td>$numero</td><td>$complemento</td><td>$bairro</td><td>$municipio</td>";
        }
    ?>
    <footer>       
         <a href="lista.php"><button type="button">Voltar para a Listagem de Empresas</button></a>
    </footer>
    </body>
</html>
