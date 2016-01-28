//constantes:
var READY_STATE_COMPLETE = 4;
var OK = 200;
//Variables:
var ajax = null;
var btnInsertar  = document.querySelector("#insertar");
var precarga = document.querySelector("#precarga");
var respuesta = document.querySelector("#respuesta");

//Funciones:
function enviarDatos()
{
  precarga.style.display = "block";
  precarga.innerHTML = "<img src='img/loader.gif'/>";

  if (ajax.readyState == READY_STATE_COMPLETE)
  {
    if (ajax.status == OK)
     {

     }
     else
     {

     }
  }
   else
   {

   }

}
function objetoAJAX()
{
  if (window.XMLHttpRequest)
   {
     return new XMLHttpRequest();
  }
   else if(window.ActiveXObject)
    {
      return new ActiveXObject("Microsoft.XMLHTTP");
  }
}
function ejecutarAJAX(datos)
{
  //defino el ajas de internet explore:
  ajax = objetoAJAX();
  //dectecta los cambio de estado:
  ajax.onreadystatechange = enviarDatos;
}

function altaHeroe(evento)
{
  //Evita que des puesdel click me reemvie al pa parte  inicial
  evento.preventDefault();
  //alert("Funciona");
  var datos = "transaccion=alta";
  ejecutarAJAX(datos);
}

function alCargarDocumento()
{
  btnInsertar.addEventListener("click",altaHeroe);
}
//Eventos:
window.addEventListener("load",alCargarDocumento);
