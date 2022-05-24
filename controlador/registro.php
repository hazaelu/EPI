<?php 
	require_once('../modelo/usuarios.php');
	$newuser = new usuarios();
	if (isset($_POST['submit']))
		{
			if($newuser->getData($_POST['correo'])==$_POST['correo']){
			echo 'El Usuario : '.$_POST['correo'].' ya existe'.'<p>';
			echo '<a href="../vista/login/singup-login.html">Inicia Sesión</a> </p>';
				}
			$newuser->nombre=$_POST['nombre'];
			$newuser->apellido=$_POST['apellido'];
			$newuser->edad=$_POST['edad'];
			$newuser->genero=$_POST['genero'];
			$newuser->estatura=$_POST['estatura'];
			$newuser->peso=$_POST['peso'];
			$newuser->correo=$_POST['correo'];
			$newuser->contrasenia=$_POST['pass'];
			$newuser->nivel=$_POST['nivel'];

			$newuser->save();
			echo ' '.$_POST['nombre ']. .$_POST['apellido'].' Se ha Registrado correctamente. <br>  su Usuario es: '.$_POST['correo'].' y su Contraseña es: '.$_POST['Contrasenia'].'<p>';

		}

 ?>


