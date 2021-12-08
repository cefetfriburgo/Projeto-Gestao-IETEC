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
        $select= "select* from contato_empresa";
        $result= mysqli_query($conexao,$select);
        $Linhas = mysqli_num_rows($result);
        
        //Select para pegar razão social da Empresa
        $select2= "select* from empresa";
        $result2= mysqli_query($conexao,$select2);
        $Linhas2 = mysqli_num_rows($result2);
        
        echo"<table><tr><th>Razão Social</th><th>Celular</th><th>Telefone</th><th>E-mail</th><th>WebSite</th>";
        for($i=0; $i <= $Linhas; $i++ )
        {
            $registro = mysqli_fetch_row($result);
           
            $celular = $registro[2];
            $telefone = $registro[3];
            $email = $registro[4];
            $website = $registro[5];
            
           
            //Registro da Tabela Empresa
            $registro2 = mysqli_fetch_row($result2);
            $razao_social = $registro2[6];

            echo"<tr><td>$razao_social</td><td>$celular</td><td>$telefone</td><td>$email</td><td>$website</td>";
        }
    ?>
    <footer>       
         <a href="lista.php"><button type="button">Voltar para a Listagem de Empresas</button></a>
    </footer>
    </body>
</html>
