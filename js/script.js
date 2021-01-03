

function validar() {
    var correo = document.getElementById("correo");

        if (correo){
          alert("Los campos no pueden quedar vacios");
          return false;
        }
        else alert('todo bien, todo correcto'){
          return true;
        }
}

function enviar_formulario() {
  document.formulario.submit()
}