<?php

if ($_POST) {
        if (isset($_POST['Usuario'])&&isset($_POST['Contrasena'])
        &&!empty($_POST['Usuario'])&&!empty($_POST['Contrasena'])) {

			$Usuario = $_POST['Usuario'];
            $Password = $_POST['Contrasena'];
            
            /* -------------------------------------------------- ---------------------------*/
            $conn  =  new  mysqli( 'localhost' , 'root' , '' , 'prueba1' );
            /* ----------------------------------------------- --------------------------- */

            $sqlselect =  "SELECT * FROM '`tienda`' WHERE `Usuario` = '$Usuario' and `Contraseña` = '$Password' ";
            
    		$conn->query($sqlselect);
			if ($conn->error) {
				header('Location: index.php?message_error=Error en la seleccion'.$conn->error);
			}else {
                header('Location: inicio.php')
            }
		}else{
			header('Location: index.php?message_error=Llene todos los campos');
		}
	}
?>