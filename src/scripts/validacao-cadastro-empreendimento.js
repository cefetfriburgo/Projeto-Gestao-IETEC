var sigla_marca_input = document.getElementById("sigla-marca");
var sigla_marca_text = document.getElementById("sigla-marca_text");
var razaoSocial_nome_input = document.getElementById("razaoSocial-nome");
var razaoSocial_nome_text = document.getElementById("razaoSocial-nome_text");
var cpf_input = document.getElementById("cpf_input");
var cpf_text = document.getElementById("cpf_text");
var cnpj_input = document.getElementById("cnpj_input");
var cnpj_text = document.getElementById("cnpj_text");
var cnae_input = document.getElementById("cnae_input");
var cnae_text = document.getElementById("cnae_text");
var inscricaoEstadual_input = document.getElementById("inscricaoEstadual_input");
var inscricaoEstadual_text = document.getElementById("inscricaoEstadual_text");

var p_incubada = document.getElementById("p-incubada");
var incubada = document.getElementById("incubada");
var fase = document.getElementById("fase");
var fase_text = document.getElementById("fase_text");

function validaPrimeiraSessao(){
    if(fase.value == 200){
        fase_text.innerHTML = "Preencha este campo para continuar.";
        cpf_text.innerHTML = "";
        cnpj_text.innerHTML = "";
        cnae_text.innerHTML = "";
        inscricaoEstadual_text.innerHTML = "";
        sigla_marca_text.innerHTML = "";
        razaoSocial_nome_text.innerHTML = "";
    }
    if(!sigla_marca_input.value){
        sigla_marca_input.focus();
        sigla_marca_text.innerHTML = "Preencha este campo para continuar.";
    }
    else{
        sigla_marca_text.innerHTML = "";
    }
    if(!razaoSocial_nome_input.value){
        razaoSocial_nome_input.focus();
        razaoSocial_nome_text.innerHTML = "Preencha este campo para continuar.";
    }
    else{
        razaoSocial_nome_text.innerHTML = "";
    }
    if(p_incubada.value == 200){
        if(!cpf_input.value){
            cpf_input.focus();
            cpf_text.innerHTML = "Preencha este campo para continuar.";
        }
        else{
            cpf_text.innerHTML = "";
        }
        cnpj_text.innerHTML = "";
        cnae_text.innerHTML = "";
        inscricaoEstadual_text.innerHTML = "";

        fase_text.innerHTML = "";
    }
    if(incubada.value == 200){
        if(!cnpj_input.value){
            cnpj_input.focus();
            cnpj_text.innerHTML = "Preencha este campo para continuar.";
        }
        else{
            cnpj_text.innerHTML = "";
        }
        if(!cnae_input.value){
            cnae_input.focus();
            cnae_text.innerHTML = "Preencha este campo para continuar.";
        }
        else{
            cnae_text.innerHTML = "";
        }
        if(!inscricaoEstadual_input.value){
            inscricaoEstadual_input.focus();
            inscricaoEstadual_text.innerHTML = "Preencha este campo para continuar.";
        }
        else{
            inscricaoEstadual_text.innerHTML = "";
        }
        cpf_text.innerHTML = "";
        fase_text.innerHTML = "";
    }
}
function validaSegundaSessao(){
    var cep_input = document.getElementById("cep_input");

    if(!cep_input.value){
        cep_input.focus();
        cep_text.innerHTML = "Preencha este campo para continuar.";
    }
    else{
        cep_text.innerHTML = "";
    }
}
function validaTerceiraSessao(){
    var email_input = document.getElementById("email_input");
    var celular_input = document.getElementById("celular_input");
    
    if(!email_input.value){
        email_input.focus();
        email_text.innerHTML = "Preencha este campo para continuar.";
    }
    else{
        email_text.innerHTML = "";
    }
    if(!celular_input.value){
        celular_input.focus();
        celular_text.innerHTML = "Preencha este campo para continuar.";
    }
    else{
        celular_text.innerHTML = "";
    }
}