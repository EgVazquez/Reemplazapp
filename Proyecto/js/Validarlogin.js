const form = document.getElementById('formulario');

form.addEventListener('submit',function(event) {
  const email = document.getElementById('email').value;
  console.log('Tu email es: ',email);
  const password = document.getElementById('password').value;
  console.log('Tu contraseña es: ',password);
  const emailRegex = /^\S+@\S+\.\S+$/;
  
  if (!emailRegex.test(email)) {
    alert('Ingrese un correo electrónico válido.');
    event.preventDefault();
  } 
  else{
    if (password.length < 8) {
      alert('La contraseña debe tener al menos 8 caracteres.');
      event.preventDefault();
    }
    else{
      //window.location.replace = "L:/FACULTAD/urquiza2018/DS/2do/Practica Profesionalizante 1/Remplazapp/Proyecto-Practica-Profesional-Gonzalo(para entregar/Proyecto-Practica-Profesional-Gonzalo/pantallaMapa.html";
      //window.location.replace("../pantallaMapa.html");
      window.open("pantallaMapa.html");

    }
  }
  //window.location.replace = "L:/FACULTAD/urquiza2018/DS/2do/Practica Profesionalizante 1/Remplazapp/Proyecto-Practica-Profesional-Gonzalo(para entregar/Proyecto-Practica-Profesional-Gonzalo/pantallaMapa.html";
  
 //window.location.replace("../pantallaMapa.html");
  window.open("pantallaMapa.html");

  
});