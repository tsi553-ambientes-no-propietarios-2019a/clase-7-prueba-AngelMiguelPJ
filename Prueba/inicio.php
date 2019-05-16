<?php


function Mostrar_Nombre_Usuario()
{
/* -------------------------------------------------- ---------------------------*/
$conn  =  new  mysqli( 'localhost' , 'root' , '' , 'prueba1');
/* ----------------------------------------------- --------------------------- */

$Consulta_nombre = ("SELECT Usuario FROM tienda");


		$result = mysqli_query($conn, $Consulta_nombre);
        echo $result->fetch_object()->Usuario;   
}
function Mostrar_Nombre_tienda(){

/* -------------------------------------------------- ---------------------------*/
$conn  =  new  mysqli( 'localhost' , 'root' , '' , 'prueba1');
/* ----------------------------------------------- --------------------------- */

$Consulta_tienda = ("SELECT Nombre_tienda FROM tienda");


		$result1 = mysqli_query($conn, $Consulta_tienda);
		echo $result1->fetch_object()->Nombre_tienda;
}


function Mostrar_Productos(){

/* -------------------------------------------------- ---------------------------*/
$conn  =  new  mysqli( 'localhost' , 'root' , '' , 'prueba1');
/* ----------------------------------------------- --------------------------- */


$query = "SELECT Codigo, Nombre, Tipo, Stock, Precio "."FROM productos";
$result = mysql_query($query);

          while($row = mysql_fetch_array($result))
          {
            echo "<tr>" . $row["Codigo"] . "</td>";
            echo "<td>" . $row["Nombre"] . "</td>";
            echo "<td>" . $row["Tipo"] . "</td>";
            echo "<td>" . $row["Stock"] . "</td>";
            echo "<td>" . $row["Precio"] . "</td><tr>";   
          }
          
          mysql_free_result($result);
          mysql_close($conn);
        
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!------------------------------------------------------->
</head>
<body>

<!---------------------------------------------------------->
<center>

<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid">            
                
                    <fieldset>
                        <legend class="text-left header">TiendasEC</legend>
                        <hr noshade="noshade" size="2" width="100%" />
                        <legend class="text-left header">Bienvenido <?php echo Mostrar_Nombre_Usuario() ?></legend>
                        <legend class="text-left header">Nombre de la tienda <?php echo Mostrar_Nombre_tienda() ?></legend>
                    </fieldset>
                    <table>
                        <tr>
                        <td><b>Código</b></td>
                        <td><b>Cliente</b></td>
                        <td><b>Importe</b></td>
                        <td><b>Fecha</b></td>
                        </tr>
                        <?php
                        echo Mostrar_Productos();
                        ?>

                    </table>
                       
        </div>
    </div>
</div>
    
</center>
<!---------------------------------------------------------->





<!----------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!----------------------------------------------------------->   
</body>
</html>

