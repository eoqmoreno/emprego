  /*
                    Stop carousel
                */
  $('.carousel').carousel('pause');

  $(document).ready(function() {
      $('.data').mask('11/11/1111');
      $('.hora').mask('00:00');
      $('.cep').mask('00000-000');
      $('.fone').mask('0000-0000');
      $('.tell').mask('(00) 0 0000-0000');
      $('.cpf').mask('000.000.000-00', { reverse: true });
      $('.dinheiro').mask('000.000.000.000.000,00', { reverse: true });
  });

  $('#fotoPerfil').on('click', function() {
      $('#fotoInput').click()
  });