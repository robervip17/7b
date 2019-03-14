function comprobar() {
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let edad=document.getElementById('edad').value;
  let curso=document.getElementById('curso').value;
  var error=false;
  document.getElementById('nombreOculto').style.display = 'none';
  document.getElementById('apellidoOculto').style.display = 'none';
  document.getElementById('edadOculto').style.display = 'none';
  document.getElementById('edadOculto1').style.display = 'none';
  document.getElementById('cursoOculto').style.display = 'none';
  document.getElementById('cursoOculto1').style.display = 'none';
  if(nombre=""){
    document.getElementById('nombreOculto').style.display = 'block';
    error=true;
  }
  if (apellidos="") {
    document.getElementById('apellidoOculto').style.display = 'block';
    error=true;
  }
  if (edad="") {
    document.getElementById('edadOculto').style.display = 'block';
    error=true;
  }
  if (curso="") {
      document.getElementById('cursoOculto').style.display = 'block';
      error=true;
  }
  if (isNaN(edad)) {
    document.getElementById('edadOculto1').style.display = 'block';
    error=true;
  }
  if (isNaN(curso)) {
    document.getElementById('cursoOculto1').style.display = 'block';
    error=true;
  }
  if (error=false) {
    return false;
  }

}
