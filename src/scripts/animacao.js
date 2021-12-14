var primeira_tela = document.getElementById('primeira-sessao');
var segunda_tela = document.getElementById('segunda-sessao');

function fadePrimeiraTela(){
    /*
    primeira_tela.classList.remove('fadeIn', 'animate', 'delay-2s');
    var element2 = document.getElementById('fadeintoggle');
    element2.classList.remove('fadeOutDown');
    */
    primeira_tela.classList.remove('animate__fadeIn');
    primeira_tela.classList.add('animate__fadeOut');
    segunda_tela.classList.add('animate__fadeIn');
}

/**/