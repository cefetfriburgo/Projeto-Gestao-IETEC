 (function($){
    $(document).ready(function(){
        $("#cpf_input").prop("disabled", true);
        $("#cnpj_input").prop("disabled", true);
        $("#inscricaoEstadual_input").prop("disabled", true);
        $("#cnae_input").prop("disabled", true);

        $("#p-incubada").click(function (){
            $("#cpf_input").prop("disabled", false);
            $('#cpf_input').removeAttr("disabled"); // Isso resolve o problema do Chromium

            $("#cnpj_input").prop("disabled", true);
            $("#inscricaoEstadual_input").prop("disabled", true);
            $("#cnae_input").prop("disabled", true);

            $("#fase").val(0);
            $("#incubada").val(0);
            $("#p-incubada").val('p');
        });
        $("#incubada").click(function (){
            $('#cpf_input').attr("disabled");

            $('#cnpj_input').removeAttr("disabled");
            $('#inscricaoEstadual_input').removeAttr("disabled");
            $('#cnae_input').removeAttr("disabled");

            $("#fase").val(0);
            $("#p-incubada").val(0);
            $("#incubada").val('i');
        });
        $("#fase").click(function (){
            $("#p-incubada").val(0);
            $("#incubada").val(0);
            $("#fase").val(200);

            $("#cpf_input").prop("disabled", true);
            $("#cnpj_input").prop("disabled", true);
            $("#inscricaoEstadual_input").prop("disabled", true);
            $("#cnae_input").prop("disabled", true);
        });
    });
    
})(jQuery);
