myFunction();
function myFunction(){
/* SETUP DOS IDS DO FORM
 * 
 * Insira os ID's CSS de acordo com os campos do seu formulário.
 * 
 *  */	
var cep='#cep_input';
var rua='#endereco';
var ddd='#numero';
var complemento='#complemento';
var bairro='#bairro';
var cidade='#municipio';
//-------------------------------------------			
			
/* CODIGO BRUTO */			
var $jq = jQuery.noConflict();
$jq(document).ready(function() {

function limpa_formulário_cep() {
// Limpa valores do formulário de cep.
$jq(rua).val('');
$jq(ddd).val('');
$jq(complemento).val('');
$jq(bairro).val('');
$jq(cidade).val('');
}
            
//Quando o campo cep perde o foco.
$jq(cep).blur(function() {
//Nova variável "cep" somente com dígitos.
var cepx = $jq(this).val().replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cepx !='') {
//Expressão regular para validar o CEP.
var validacep = /^[0-9]{8}$/;
//Valida o formato do CEP.
if(validacep.test(cepx)) {
//Preenche os campos com "..." enquanto consulta webservice.
$jq(rua).val('...');
$jq(ddd).val('...');
$jq(complemento).val('...');
$jq(bairro).val('...');
$jq(cidade).val('...');

//Consulta o webservice viacep.com.br/
$jq.getJSON('https://viacep.com.br/ws/'+ cepx +'/json/?callback=?', function(dados) {
if (!('erro' in dados)) {
//Atualiza os campos com os valores da consulta.
$jq(rua).val(dados.logradouro);
$jq(ddd).val(dados.ddd);
$jq(complemento).val(dados.complemento);
$jq(bairro).val(dados.bairro);
$jq(cidade).val(dados.localidade);
} //end if.
else {
//CEP pesquisado não foi encontrado.
limpa_formulário_cep();
$jq(cep).val('CEP não encontrado!');
}
});
} //end if.
else {
//cep é inválido.
limpa_formulário_cep();
alert('Formato de CEP inválido.');
}
} //end if.
else {
//cep sem valor, limpa formulário.
limpa_formulário_cep();
}
});
});

}
