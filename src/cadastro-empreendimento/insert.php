
        <?php
        include "conexao.php";

        //$pincubada= $_POST['p-incubada'];
        //$incubada= $_POST['incubada'];
        $data= $_POST['data'];
        $Nomefan= $_POST['sigla-marca'];
        $razaosocial = $_POST['razaoSocial-nome'];
        //$cpf = $_POST['cpf'];
        //$cnpj = $_POST['cnpj'];
        //$cnae = $_POST['cnae'];
        //$inscricaoestadual = $_POST['inscricaoEstadual'];
        $endereco = $_POST ['endereco'];
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $phone = $_POST['phone'];
        $celular = $_POST['celular'];
        $email = $_POST['e-mail'];
        $website = $_POST['website'];
        $logoEmpresa = $_POST['logoEmpresa'];
        $comentario = $_POST['comentario'];
        
        $insert_endereco = "insert into endereco (endereco,cep,numero,bairro,municipio,complemento) values ('$endereco','$cep','$numero','$bairro','$municipio','$complemento')";
        $insert_empresa= "insert into empresa (Endereco_id, nome_fantasia,data_incubacao,razao_social,comentario)
        values( '9','$Nomefan','$data','$razaosocial','$comentario')";
        
        mysqli_query($conexao,$insert_endereco);
        mysqli_query($conexao,$insert_empresa);
        
        $LinhasAfetadas = mysqli_affected_rows($conexao);
        if($LinhasAfetadas==1)
        {
                echo("Empresa cadastrada com sucesso");
        }
        else
        {
                echo("ERRO, empresa não foi cadastrada");
        }       

                

?>