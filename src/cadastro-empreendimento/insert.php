<?php

include "conexao.php";

$fase= $_POST['fase_incubacao'];
$data= filter_var($_POST['data'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$Nomefan= filter_var($_POST['sigla-marca'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$razaosocial = filter_var($_POST['razaoSocial-nome'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$endereco =filter_var($_POST ['endereco'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$cep = filter_var($_POST['cep'],FILTER_SANITIZE_ADD_SLASHES,FILTER_SANITIZE_STRING);
$numero = filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT);
$complemento = filter_var($_POST['complemento'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$bairro = filter_var($_POST['bairro'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$municipio = filter_var($_POST['municipio'], FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$celular1 = filter_var($_POST['celphone'],FILTER_SANITIZE_NUMBER_INT) ;
$phone1 = filter_var($_POST['telephone'],FILTER_SANITIZE_NUMBER_INT);
$email = filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL) ;
$website = filter_var($_POST['website'], FILTER_SANITIZE_URL);
$logoEmpresa = $_POST['logoEmpresa'];
$comentario = filter_var($_POST['comentario'],FILTER_SANITIZE_ADD_SLASHES, FILTER_SANITIZE_STRING);
$celular = preg_replace("/[^0-9]/", "", $celular1);
$phone = preg_replace("/[^0-9]/", "", $phone1);


if($fase == 'p'){
        $cpf = $_POST['cpf'];
        $insert_empresa= "insert into empresa ( tipo, Endereco_id, nome_fantasia, cpf, data_incubacao, razao_social, comentario) values( '$fase', (SELECT MAX(id) FROM endereco), '$Nomefan', '$cpf', '$data',' $razaosocial', '$comentario')";

        mysqli_query($conexao, $insert_empresa);
}
if($fase == 'i'){
        $cnpj = $_POST['cnpj'];
        $cnae = $_POST['cnae'];
        $inscricaoestadual = $_POST['inscricaoEstadual'];
        $insert_empresa= "insert into empresa ( tipo, Endereco_id, nome_fantasia, cnpj, data_incubacao, razao_social, inscricao_estadual, cnae, comentario) values( '$fase', (SELECT MAX(id) FROM endereco), '$Nomefan', '$cnpj', '$data',' $razaosocial ','$inscricaoestadual', '$cnae', '$comentario')";
        $insert_endereco = "insert into endereco (endereco,cep,numero,bairro,municipio,complemento) values ('$endereco','$cep','$numero','$bairro','$municipio','$complemento')";
        $insert_contato= "insert into contato_empresa ( celular, telefone, email, website, Empresa_id) values( '$celular','$phone', '$email', '$website', (SELECT MAX(id) FROM empresa))";

        mysqli_query($conexao, $insert_empresa);
}

$insert_endereco = "insert into endereco (endereco,cep,numero,bairro,municipio,complemento) values ('$endereco','$cep','$numero','$bairro','$municipio','$complemento')";
$insert_contato= "insert into contato_empresa ( celular, telefone, email, website, Empresa_id) values( '$celular','$phone', '$email', '$website', (SELECT MAX(id) FROM empresa))";
mysqli_query($conexao, $insert_contato);
mysqli_query($conexao, $insert_endereco);
$LinhasAfetadas = mysqli_affected_rows($conexao);

if($LinhasAfetadas==1){
        echo("Empresa cadastrada com sucesso");
}
else{
        echo("ERRO, empresa não foi cadastrada");
}
?>