 (function($){
    $(document).ready(function() {
    $("#cpf_input").prop("disabled", true);
    $("#cnpj_input").prop("disabled", true);
    $("#inscricaoEstadual_input").prop("disabled", true);
    $("#cnae_input").prop("disabled", true);

    $("#p-incubada").click(function (){
        $("#cpf_input").prop("disabled", false);
        $("#cnpj_input").prop("disabled", true);
        $("#inscricaoEstadual_input").prop("disabled", true);
        $("#cnae_input").prop("disabled", true);

        // Isso dah erro ...

        // $("#fase").val(0);
        // $("#incubada").val(0);
        // $("#p-incubada").val('p');
    });
    $("#incubada").click(function (){
        $("#cpf_input").prop("disabled", true);
        $("#cnpj_input").prop("disabled", false);
        $("#inscricaoEstadual_input").prop("disabled", false);
        $("#cnae_input").prop("disabled", false);

        // Isso dah erro

        // $("#fase").val(0);
        // $("#p-incubada").val(0);
        // $("#incubada").val('i');
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
    
    $('html,body').animate({scrollTop: $(".segunda_sessao").offset().top},'slow');
    
})(jQuery);
