$(document).ready(function() {
    $.ajax({
        url: '../categorias.php',
        data: 'nome=nome1',
        type: 'POST',
        dataType: 'json',
        success: function(resultado) {
            var str = "";
            for (let index = 0; index < resultado.length; index++) {
                str += "<div class='col-sm-3 col-6 pb-5'><input type='button' value='" + resultado[index] + "' class='btn bg-azulClaro branco f-text-bold rounded-pill w-100'></div>";
            }
            $('.categorias').html(str);
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }
    });

    $.ajax({
        url: '../vagas.php',
        data: 'categoria=cat,local=loc,horas=hr',
        type: 'POST',
        dataType: 'json',
        success: function(resultado) {
            var cont = 0;
            var str = '<div class="carousel-item active"><div class="card-deck">';
            for (let index = 0; index < resultado.length; index++) {
                if (cont > 2 && cont % 3 == 0) {
                    str += '</div></div><div class="carousel-item"><div class="card-deck">';
                }
                str += cardsearch(resultado[index]);
                cont += 1;
            }
            str += '</div></div>';
            $('.cardpc').html(str);
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }
    });

    function cardsearch(result) {
        return '<a href="./mostrarVaga.php?pesquisa='+ result[4] +'" class="text-decoration-none"><div class="card text-left"><img src="' + result[3] + '" class="card-img-top" alt="..."><div class="card-body p-0"><h5 class="card-title bg-azulClaro branco w-100 text-center f-text pt-1 m-0">' + result[0] + '</h5><ul class="card-text list-group text-center azulEscuro f-text-bold mt-2"><li><span class="fas fa-map-marker-alt"></span> ' + result[1] + '</li><li><span class="fas fa-clock"></span> ' + result[2] + ' semanais</li></ul></div></a></div>';
    }

    $.ajax({
        url: '../vagas.php',
        data: 'categoria=cat,local=loc,horas=hr',
        type: 'POST',
        dataType: 'json',
        success: function(resultado) {
            var cont = 0;
            var str = '<div class="carousel-item active">';
            for (let index = 0; index < resultado.length; index++) {
                if (cont > 0) {
                    str += '</div></div><div class="carousel-item">';
                }
                str += cardsearch(resultado[index]);
                cont += 1;
            }
            str += '</div></div>';
            $('.cardcell').html(str);
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }
    });

});