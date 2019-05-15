<?php

// registro de productos a travez de un formulario

if($_POST){
    /*----------------------------------------------------------------------------*/
    if(isset($_POST['Nombre_tienda']) && isset($_POST['Usuario'])
            && isset($_POST['Contrasena']) && isset($_POST['Confi_contrasena'])
            &&  !empty($_POST['Nombre_tienda']) && ($_POST['Usuario']) && ($_POST['Contrasena']) && ($_POST['Confi_contrasena']) ){
        //insertar con funcion php  $password = md5($_POST['password']);
    /*-------------------------------------------------------------------------*/
        $Nom_tienda = $_POST['Nombre_tienda'];
		$username = $_POST['Usuario'];
        $password = $_POST['Contrasena'];
        $password_2 = $_POST['Confi_contrasena'];
    /*---------------------------------------------------------------------------*/
	$conn = new mysqli('localhost','root','','prueba1');

    /**-------------------------------------------------------------------------- */
	$sql_insert = "INSERT INTO tienda (Nombre_Tienda,Usuario,Clave,Confir_Clave)
        values( '$Nom_tienda','$username',MD5('$password'), MD5('$password_2'))";

    
	$conn->query($sql_insert);

		if($conn->error){
			echo 'ocurrio un error';


		}else{

			header('Location: index.php');
		}
	}else{
	
	
		header('Location: registro_tienda.php?error_message=ingrese-todos-los-datos!');
	exit;
	}
}
else{
	header('Location: registro_tienda.php');
	exit;
}
?>