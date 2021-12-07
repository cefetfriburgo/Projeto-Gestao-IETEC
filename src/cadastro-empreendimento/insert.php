
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
        $phone = $_POST['telephone'];
        $celular = $_POST['celphone'];
        $email = $_POST['e-mail'];
        $website = $_POST['website'];
        $logoEmpresa = $_POST['logoEmpresa'];
        $comentario = $_POST['comentario'];


        $insert_endereco = "insert into endereco (endereco,cep,numero,bairro,municipio,complemento) 
                  values ('$endereco','$cep','$numero','$bairro','$municipio','$complemento')";

        $insert_empresa= "insert into empresa ( Endereco_id, nome_fantasia,data_incubacao,razao_social, inscricao_estadual, cnae, comentario)
        values( (SELECT MAX(id) FROM endereco), '$Nomefan','2020-05-05 ',' $razaosocial ','0123456789', '1234567', '')";
        //  ---------- Lembrar de resolver a questão da data que está vindo com hora junto ------------

        $insert_contato= "insert into contato_empresa ( celular, telefone, email, website, Empresa_id)
        values( '$celular','$phone', '$email', '$website', (SELECT MAX(id) FROM empresa))";
        
        //#1366 - Incorrect integer value: '(22)98896-3232' for column 'celular' at row 1
        

        
        
        mysqli_query($conexao, $insert_endereco);
        mysqli_query($conexao, $insert_empresa);
        mysqli_query($conexao, $insert_contato);
        
        // Tivemos que executar as consultas separadamente, pois ao executar as duas ao mesmo tempo retornava erro
         
        /* Exibe o erro na consulta
         if ($resultado == false){
                print_r( $full_query );
                echo mysqli_error($conexao);

	        die();
	}
        */

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