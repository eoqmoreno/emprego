$(document).ready(function () {
    $('.carousel').carousel('pause');

    $('.data').mask('11/11/1111');
    $('.hora').mask('00:00');
    $('.cep').mask('00000-000');
    $('.fone').mask('0000-0000');
    $('.tell').mask('(00) 0 0000-0000');
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.dinheiro').mask('000.000,00', { reverse: true });
    $(".cnpj").mask("99.999.999/9999-99");
    $('#fotoPerfil').on('click', function () {
        $('#fotoInput').click();
    });
});

function apagarVaga(id){
    Swal.fire({
        title: 'Corfime aqui',
        text: 'Você realmente quer apagar essa vaga?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim'
    }).then((result) => {
        if (result.value) {
            location.replace('./apagarV.php?id='+id);
        }
    })
}

function apagarVagaC(id){
    Swal.fire({
        title: 'Corfime aqui',
        text: 'Você realmente quer apagar essa vaga?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim'
    }).then((result) => {
        if (result.value) {
            location.replace('./apagarVC.php?id='+id);
        }
    })
}

function coracao(id){
    Swal.fire({
        title: 'Corfime aqui',
        text: 'Você realmente quer dá um coração nesse candidato?',
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim'
    }).then((result) => {
        if (result.value) {
            location.replace('./coracao.php?id='+id);
        }
    })
}


function sairForm(){
    Swal.fire({
        title: 'Corfime aqui',
        text: 'Você realmente quer sair sem terminar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim'
    }).then((result) => {
        if (result.value) {
            location.replace('./');
        }
    })
}

function sair(){
            location.replace('./');
}