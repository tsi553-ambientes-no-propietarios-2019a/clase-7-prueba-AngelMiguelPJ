<?php


$contraseña = $_POST['Contrasena'];
$contraseña_confirmacion = $_POST['Confirmar_contrasena'];

	if ($contraseña==$contraseña_confirmacion) {
		if ($_POST) {
            if (isset($_POST['Nombre_tienda'])&&isset($_POST['Usuario'])&&isset($_POST['Contrasena'])
                &&!empty($_POST['Nombre_tienda'])&&!empty($_POST['Usuario'])&&!empty($_POST['Contrasena'])) {
                
                $Nom_tienda = $_POST['Nombre_tienda'];
                $Usuario = $_POST['Usuario'];
                $Password = $_POST['Contrasena'];

                /* -------------------------------------------------- ---------------------------*/
                $conn  =  new  mysqli( 'localhost' , 'root' , '' , 'prueba1' );
                /* ----------------------------------------------- --------------------------- */
                $sql_insert  =  "INSERT INTO tienda (Nombre_tienda, Usuario, Contraseña)
                values ('$Nom_tienda','$Usuario','$Password') " ;
                
                $conn->query( $sql_insert );
                if ( $conn->error ) {
                    echo  'ocurrio un error '.$conn->error;
                } else {
                    header ( ' Location: index.php ' );
                }
            }
            else{
                header('Location: registro_tienda.php?message_error=Llene todos los campos');
            }
	    }   
    }elseif ($contraseña!=$contraseña_confirmacion) {
        header('Location: registro_tienda.php?message_error=Las contraseñas no coinciden'.$conn->error);
    }
		


?>
