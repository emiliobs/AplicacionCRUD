<?php

    require_once 'config.php';
    
    
    function conexionMySql()
    {
        $conexion = new mysqli(SERVER,USER, PASSWORD, BD);
        
        if ($conexion->connect_error)
        {
            $error = "<div class = 'Error'>";
            $error .="Error de Conexión Nº<b>" . $conexion->connect_errno . "</b>
                    Mensaje Error: <mark>". $conexion->connect_error . "</mark>";
            $error .="</div>";

               // die($error);
               print $error;    
        }
        else            
        {
            $formato = "<div class='mensaje'>";
            $formato .= "Conexión Exitosa: <p>%s</p>";     
            $formato .="</dv>";
            
//            printf($formato,$conexion->host_info );
        }
        
        return $conexion;
    }
    
    //conexionMySql();

?>
