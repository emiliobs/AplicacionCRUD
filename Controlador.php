<?php
    require 'Vistas.php';
    require 'Modelo.php';
    
    /*
       Aplicación CreateReadUpdateDelete
       php tienen 2 métodos de envíos de datos: POST nad GET 
     * Create ---Afecta a la BD -- INSERT(sql) POST --MOdelo
     * Read -- No Afecta a la BD -- SELECT(sql) GET-- Vista
     * Update -- Afecta a la BD -- UPDATE(sql) POST -- MOdelo
     * Delete -- Afecta a la BDs -- DELETE(sql) POST -- MOdelo
     */
    
    $transaccion = $_POST["transaccion"];
        
//    echo $transaccion;
    
function ejecutarTransaccion($transaccion)
{
    if ($transaccion == "alta")
    {
        //Mostrar el formulario de alta:
    }
    else if($transaccion == "insertar")
    {
        //procesar formulario del formulario de alta en insertarlos en  Mysql: 
    }
    else if($transaccion == "eliminar")
    {
        //Elimina de Mysql el registro solicitado
    }
    else if($transaccion == "editar")
    {
        //traer los datos del registro a editar en un formulario:
    }
    else if($transaccion == "actualizar")
    {
        //Modificar en Mysql los datos modificados:
    }
}

ejecutarTransaccion($transaccion);
?>