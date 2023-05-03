const form = document.getElementById("formulario");
form.addEventListener("submit", function (event) {
  // Obtener referencias a los campos del formulario
  const nombre = document.getElementById("nombre");
  const cuil = document.getElementById("cuil");
  const email = document.getElementById("email");
  const telefono = document.getElementById("telefono");
  const clave = document.getElementById("clave");
  const ubicacion = document.getElementById("ubicacion");
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const emailValue = email.value.trim();
  const telefonoValue = telefono.value.trim();
  const claveValue= clave.value.trim();
  console.log(nombre.value);
  console.log(cuil.value);
  console.log(email.value);
  console.log(telefono.value);
  console.log(clave.value);
  console.log(ubicacion.value);
  // Comprobar que los campos no estén vacíos
  if (nombre.value == "" || nombre.value == null) {
    alert("Por favor ingrese su Nombre y Apellido");
    event.preventDefault();
    return false;
  }
  if (
    cuil.value == "" ||
    (cuil.valu == null && !/^\d{2}-\d{8}-\d{1}$/.test(cuil.value))
  ) {
    alert("Debe ingresar un CUIL válido (formato XX-XXXXXXXX-X)");
    event.preventDefault();
    return false;
  }
  if (emailValue.length === 0) {
    alert("Ingrese su dirección de correo electrónico.");
    console.log("pase el valor nulo");
    event.preventDefault();
    return false;
  } else if (!emailRegex.test(emailValue)) {
    alert("Ingrese una dirección de correo electrónico válida.");
    console.log("pase por el mail invalido");
    event.preventDefault();
    return false;
  } else {
    email.setCustomValidity("");
    //console.log("Ya no me quedan validaciones por hacer");
  }
  console.log("estoy entrando a validar el telefono");
  if (telefonoValue == "" || telefonoValue.length < 10) {
    //console.log("Es falsa la validación del telefono");
    alert("Por favor, ingrese un número de teléfono válido");
    event.preventDefault();
    return false;
  }
  console.log('estoy por validar la clave')
  if (claveValue.length < 8 || !claveValue) {
    //console.log('estoy dentro del IF de clave');
    alert("La contraseña debe tener al menos 8 caracteres y no puede ser nula.");
    event.preventDefault();
    return false;
  } else {
    clave.setCustomValidity("");
  }
  console.log('entrando a validar el ingreso de ubicacion');
  if (ubicacion.value == "" || ubicacion.value == null) {
      alert("Por favor seleccione su ubicación");
      event.preventDefault();
      return false;
    }
    // Si todos los campos están completos, devolver verdadero para enviar el formulario
    alert('Se creo la cuenta exitosamente');
    window.open("pantallaMapa.html");
    
    return true;
  });
  
/*

  function guardarDatos(nombre, cuil, email, telefono, clave, ubicacion) {
    const datos = {
      nombre: nombre.value,
      cuil: cuil.value,
      email: email.value,
      telefono: telefono.value,
      clave: clave.value,
      ubicacion: ubicacion.value
    };
    
    const rutaArchivo = './datos/usuarios.json'; // Especificar la ruta del archivo
    
    document.writeFile(rutaArchivo, JSON.stringify(datos), function (error) {
      if (error) {
        console.error('Error al guardar los datos:', error);
      } else {
        console.log('Los datos se han guardado correctamente en', rutaArchivo);
      }
    });
  }
  /*
  function generarjson(){ 
    document.getElementById("formulario");
   
    // Recopilar datos del formulario
    var nombre = document.getElementById("nombre").value;
    var cuil = document.getElementById("cuil").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var clave = document.getElementById("clave").value;
    var ubicacion = document.getElementById("ubicacion").value;
    
    
    // Convertir objeto JSON en una cadena JSON
    var jsonString = JSON.stringify(data);
  
    // Crear objeto Blob y descargar el archivo JSON
    var blob = new Blob([jsonString], {type: "application/json"});
    var url = URL.createObjectURL(blob);
    var a = document.createElement("a");
    a.download = "datos.json";
    a.href = url;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
};*/
