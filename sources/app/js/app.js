$(document).ready( function () {

  function verificaNumero(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          alert('digite apenas números');
            return false;
        }
    }

    $("#num1").keypress(verificaNumero);
    $("#num2").keypress(verificaNumero);
    $("#valorFib").keypress(verificaNumero);

//AJAX VAI QUE PRECISE
      $('#Form').submit( function() {
    var that = this,
      dados = $(this).serialize();
    
    $.ajax({
      url : $(that).attr('action'),
      type : 'POST',
      data : dados,
      success : function (responseText) {
        document.getElementById('msg').style.color="red";
        document.getElementById('msg').innerHTML = responseText;
        // window.location.href = '../../../GAF/View/Professor/listarAtividade.php'
        $('#Form').trigger("reset"); 
      }
    });
    
    return false;
  });
  });