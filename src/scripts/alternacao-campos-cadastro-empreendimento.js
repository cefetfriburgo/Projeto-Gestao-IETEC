
(function($){
    $(document).ready(function(){
        $('#cpf_input').attr("disabled","disabled");
        $('#cnpj_input').attr("disabled","disabled");
        $('#inscricaoEstadual_input').attr("disabled","disabled");
        $('#cnae_input').attr("disabled","disabled");

        $("#p-incubada").click(function (){
            $('#cpf_input').removeAttr("disabled");

            $('#cnpj_input').attr("disabled","disabled");
            $('#inscricaoEstadual_input').attr("disabled","disabled");
            $('#cnae_input').attr("disabled","disabled");

            $("#fase").val(0);
            $("#incubada").val(0);
            $("#p-incubada").val('p');
        });
        $("#incubada").click(function (){
            $('#cpf_input').attr("disabled","disabled");

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

            $('#cpf_input').attr("disabled","disabled");
            $('#cnpj_input').attr("disabled","disabled");
            $('#inscricaoEstadual_input').attr("disabled","disabled");
            $('#cnae_input').attr("disabled","disabled");
        });
    });
})(jQuery);
