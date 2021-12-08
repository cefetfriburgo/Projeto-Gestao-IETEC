
        <?php
        include "conexao.php";

        //$pincubada= $_POST['p-incubada'];
        //$incubada= $_POST['incubada'];
        $data= filter_var($_POST['data'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
        $Nomefan= filter_var($_POST['sigla-marca'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
        $razaosocial = filter_var($_POST['razaoSocial-nome'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
        //$cpf = $_POST['cpf']; 
        //$cnpj = $_POST['cnpj']; 
        //$cnae = $_POST['cnae'];
        //$inscricaoestadual = $_POST['inscricaoEstadual'];
        
        $endereco =filter_var($_POST ['endereco'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_ADD_SLASHES FILTER_SANITIZE_STRING
        $cep = filter_var($_POST['cep'],FILTER_SANITIZE_ADD_SLASHES,FILTER_SANITIZE_STRING); //FILTER_SANITIZE_ADD_SLASHES FILTER_SANITIZE_STRING
        $numero = filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT); //FILTER_SANITIZE_NUMBER_INT
        $complemento = filter_var($_POST['complemento'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_ADD_SLASHES FILTER_SANITIZE_STRING
        $bairro = filter_var($_POST['bairro'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_ADD_SLASHES FILTER_SANITIZE_STRING
        $municipio = filter_var($_POST['municipio'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_ADD_SLASHES FILTER_SANITIZE_STRING
        $celular = filter_var($_POST['celphone'],FILTER_SANITIZE_NUMBER_INT) ;
        $phone = filter_var($_POST['telephone'],FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL) ; //FILTER_VALIDATE_EMAIL
        $website = filter_var($_POST['website'], FILTER_SANITIZE_URL); // FILTER_SANITIZE_URL
        $logoEmpresa = $_POST['logoEmpresa'];
        $comentario = filter_var($_POST['comentario'],FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_ADD_SLASHES FILTER_SANITIZE_STRING
        
        //echo "$phone<br> $celular <br> $email <br> $cep";
        
        $insert_endereco = "insert into endereco (endereco,cep,numero,bairro,municipio,complemento) 
                  values ('$endereco','$cep','$numero','$bairro','$municipio','$complemento')";

        $insert_empresa= "insert into empresa ( Endereco_id, nome_fantasia,data_incubacao,razao_social, inscricao_estadual, cnae, comentario)
        values( (SELECT MAX(id) FROM endereco), '$Nomefan','2020-05-05',' $razaosocial ','0123456789', '1234567', '')";
          #---------- Lembrar de resolver a questão da data que está vindo com hora junto ------------

        $insert_contato= "insert into contato_empresa ( celular, telefone, email, website, Empresa_id)
        values( '$celular','$phone', '$email', '$website', (SELECT MAX(id) FROM empresa))";
        
        
        mysqli_query($conexao, $insert_endereco);
        mysqli_query($conexao, $insert_empresa);
        mysqli_query($conexao, $insert_contato); 
        

         
        /* Exibe o erro na consulta
         if ($resultado == false){
                print_r( $full_query );
                echo mysqli_error($conexao);

	        die();
	}
        */
/*
        $LinhasAfetadas = mysqli_affected_rows($conexao);
        if($LinhasAfetadas==1)
        {
                echo("Empresa cadastrada com sucesso");
        }
        else
        {
                echo("ERRO, empresa não foi cadastrada");
        }       

       */         

?>