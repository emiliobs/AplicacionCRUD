<?php

require_once 'Conexion.php';

function mostrarHeroes() {
    $mysql = conexionMySql();
    $sql = "Select * from heroes order by IdHeroe desc";

    if ($resultado = $mysql->query($sql)) {
        if (mysqli_num_rows($resultado) == 0)
        {
          $respuesta = "<div class='error'><strong>Error: NO existen registros de Super"
                     . "Héroes, la Base de Datos esta vacía.</strong></div>";  
        }
        else            
            {
            $tabla = "<table id='tablaHeroes' class='tabla'>";
            $tabla .= "<thead>";
            $tabla .= "<tr>";
            $tabla .= "<th>Id Héroe</th>";
            $tabla .= "<th>Nombre</th>";
            $tabla .= "<th>Imagen</th>";
            $tabla .= "<th>Descripción</th>";
            $tabla .= "<th>Editorial</th>";
            $tabla .= "<th></th>";
            $tabla .= "<th></th>";
            $tabla .= "</tr>";
            $tabla .= "</thead>";
            $tabla .= "<tbody>";
            while ($fila = $resultado->fetch_assoc()) {
                $tabla .= "<tr>";
                $tabla .= "<td>" . $fila["IdHeroe"] . "</td>";
                $tabla .= "<td><h2>" . $fila["Nombre"] . "<h2></td>";
                $tabla .= "<td><img src='Img/". $fila["Imagen"] ."'alt='Kickass'/></td>";
                $tabla .= "<td><p>" . $fila["Descripcion"] . "</p></td>";
                $tabla .= "<td><h3>" . $fila["Editorial"] . "</h3></td>";
                $tabla .= "<td>Botón Editar.</td>";
                $tabla .= "<td>Botón Eliminar.</td>";
                $tabla .= "</tr>";
            }
            $resultado->free();
            $tabla .= "</tbody>";
            $tabla .= "</table>";

            $respuesta = $tabla;
        }
    } 
    else 
        {
        $respuesta = "<div class='error'><strong>Error: No se ejecuto la consulta a la "
                . "   Base de Datos</strong></div>";
    }

    return printf($respuesta);
}

?>
