<?php


if($_POST){
	if(isset($_POST['Usuario'])&&
isset($_POST['Contrasena']) &&  !empty($_POST['Usuario']) && ($_POST['Contrasena']) ){
        //insertar con funcion php  $password = md5($_POST['password']);
        
		$username = $_POST['Usuario'];
		$password = $_POST['Contrasena'];


	$conn = new mysqli('localhost','root','','prueba1');

	

	$sql_insert = "SELECT * FROM tienda WHERE Usuario = '$username'
    AND Clave = MD5('$password')";



$res =	$conn->query($sql);


		if($conn->error){
			redirect(' index.php?error_message=ocurrio un error: ' . $conn->error);
			header('Location: index.php?error_message=ocurrio un error: ' . $conn->error);
				exit;

			}if($res->num_rows = 0){
				while ($row = $res->fetch_assoc()){
					$_SESSION['user'] = [
						'Username' => $row['
						username'],
						'id' => $row['id']
 					];
					header('Location: inicio.php');
				}


			}else{
				header('Location: inicio.php');
				exit;

		}}}

