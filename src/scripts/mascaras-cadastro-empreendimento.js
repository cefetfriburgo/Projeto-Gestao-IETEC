
    var cpf_input = document.getElementById("cpf_input");
    var maskCPF = {
        mask: '000.000.000-00'
    };
    var maskCPF_apply = IMask(cpf_input,maskCPF);
    
    var cnpj_input = document.getElementById("cnpj_input");
    var maskCNPJ = {
        mask: '00.000.000/0000-00'
    };
    var maskCNPJ_apply = IMask(cnpj_input,maskCNPJ);
    
    var cep_input = document.getElementById("cep_input");
    var maskCEP = {
        mask: '00000-000'
    };
    var maskCEP_apply = IMask(cep_input,maskCEP);
    
    var celular_input = document.getElementById("celular_input");
    var maskCEL = {
        mask: '(00) 00000-0000'
    };
    var maskCEL_apply = IMask(celular_input,maskCEL);
    
    var telefone_input = document.getElementById("telefone");
    var maskTEL = {
        mask: '(00) 0000-0000'
    };
    var maskTEL_apply = IMask(telefone_input,maskTEL);
    