function formatPhoneNumber(input) {
    // Obtener el valor del campo de entrada y eliminar los espacios existentes
    const inputValue = input.value.replace(/\s/g, '');
  
    // Aplicar el formato deseado utilizando una expresión regular
    // Los grupos de tres dígitos se separan con espacios
    const formattedInput = inputValue.replace(/(\d{3})(\d{3})(\d{4})/, '$1 $2 $3');
  
    // Actualizar el valor del campo de entrada con el número formateado
    input.value = formattedInput;

  }


const btnContinuar = document.getElementById('btnContinuar');
const btnMostrarForm = document.getElementById('btnMostrarForm');


nombreUsuario.addEventListener("input", limpiarCamposIncompletos);
apellidoPaterno.addEventListener("input", limpiarCamposIncompletos);
apellidoMaterno.addEventListener("input", limpiarCamposIncompletos);
numeroCelular.addEventListener("input", limpiarCamposIncompletos);
contrasena.addEventListener("input", limpiarCamposIncompletos);
correoElectronico.addEventListener("input", limpiarCamposIncompletos);


const llenarCampos = document.getElementById('llenarCampos');

var datosFormulario1 = {};
var datosFormulario2 = {};



function validarCorreoElectronico(correo) {
  const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regexCorreo.test(correo);
}
function mostrarMensajeError(){
    llenarCampos.style.display = "block"
}
function quitarMensajeError(){
    llenarCampos.style.display = "none"
}


function resaltarCamposIncompletos() {
    var nombreUsuario = document.getElementById("nombreUsuario");
    var email = document.getElementById("email");
    var apellidoPaterno = document.getElementById("apellidoPaterno");
    var apellidoMaterno = document.getElementById("apellidoMaterno");
    var numeroCelular = document.getElementById("numeroCelular");
    var contrasena = document.getElementById("contrasena");
    var password = document.getElementById("password");
    var correoElectronico = document.getElementById("correoElectronico");
  
    if (nombreUsuario.value.trim() === "") {
      nombreUsuario.style.border = "1px solid red";
      llenarCampos.style.display = "block";
    }
    if (apellidoPaterno.value.trim() === "") {
      apellidoPaterno.style.border = "1px solid red";
      llenarCampos.style.display = "block";
    }
    if (apellidoMaterno.value.trim() === "") {
      apellidoMaterno.style.border = "1px solid red";
      llenarCampos.style.display = "block";
    }
    if (numeroCelular.value.trim() === "") {
      numeroCelular.style.border = "1px solid red";
      llenarCampos.style.display = "block";
    }
    if (contrasena.value.trim() === "") {
      contrasena.style.border = "1px solid red";
      llenarCampos.style.display = "block";
    }
    if (correoElectronico.value.trim() === "") {
      correoElectronico.style.border = "1px solid red";
      llenarCampos.style.display = "block";
    }
    if(email.value.trim() == ""){
      email.style.border = "1px solid red";
    }
    if(password.value.trim() == ""){
      password.style.border = "1px solid red";
    }
  }
  

function limpiarCamposIncompletos() {
    var nombreUsuario = document.getElementById("nombreUsuario");
    var apellidoPaterno = document.getElementById("apellidoPaterno");
    var apellidoMaterno = document.getElementById("apellidoMaterno");
    var numeroCelular = document.getElementById("numeroCelular");
    var contrasena = document.getElementById("contrasena");
    var correoElectronico = document.getElementById("correoElectronico");
  
    nombreUsuario.style.border = "2px solid black";
    apellidoPaterno.style.border = "";
    apellidoMaterno.style.border = "";
    numeroCelular.style.border = "";
    contrasena.style.border = "";
    correoElectronico.style.border = "";
    quitarMensajeError();
}




function validarFormulario(){
    const nombreUsuario = document.getElementById('nombreUsuario').value;
    const apellidoPaterno = document.getElementById('apellidoPaterno').value;
    const apellidoMaterno = document.getElementById('apellidoMaterno').value;
    const numeroCelular = document.getElementById('numeroCelular').value;
    const contrasena = document.getElementById('contrasena').value;
    const correoElectronico = document.getElementById('correoElectronico').value;

    if (
        nombreUsuario.trim() === "" ||
        apellidoPaterno.trim() === "" ||
        apellidoMaterno.trim() === "" ||
        numeroCelular.trim() === "" ||
        contrasena.trim() === "" ||
        correoElectronico.trim() === ""
      ) {
        resaltarCamposIncompletos([nombreUsuario, apellidoPaterno, apellidoMaterno, numeroCelular, contrasena, correoElectronico]);
        return;
      }
      
      limpiarCamposIncompletos([nombreUsuario, apellidoPaterno, apellidoMaterno, numeroCelular, contrasena, correoElectronico]);
      const formularioPrincipal = document.getElementById('formularioPrincipal');
      const formularioSecundario = document.getElementById('formularioSecundario');
      const textoBienvenida = document.getElementById('textoBienvenida');

      formularioPrincipal.style.display = "none";
      formularioSecundario.style.display = "block";
      textoBienvenida.style.display = "none";

}

function validarFormularioInicioSesion() {
  console.log("siii");
    const email = document.getElementById('email');
    const password = document.getElementById('password');

    if(
      email.trim() === "" ||
      password.trim() === ""
    ){
      resaltarCamposIncompletos([email, password]);
    }


}




function enviarFormulario() {
    var formulario2Inputs = document.getElementById("formulario2").getElementsByTagName("input");
    var datosFormulario2 = {};

    // Validar si algún campo del formulario 2 está vacío
    for (var i = 0; i < formulario2Inputs.length; i++) {
      var input = formulario2Inputs[i];
      if (input.value.trim() === "") {
        alert("Por favor, complete todos los campos del formulario 2.");
        resaltarCamposIncompletos([input]);
        return;
      }
      datosFormulario2[input.id] = input.value;
    }
}