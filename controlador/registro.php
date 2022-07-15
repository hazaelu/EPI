<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="../vista/pantallas/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="../vista/pantallas/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="../vista/pantallas/revolution/css/navigation.css" />
<!-- js section -->
    
            <script src="../vista/pantallas/js/jquery.min.js"></script>
            <script src="../vista/pantallas/js/bootstrap.min.js"></script>
            <!-- menu js -->
            <script src="../vista/pantallas/js/menumaker.js"></script>
            <!-- wow animation -->
            <script src="../vista/pantallas/js/wow.js"></script>
            <!-- custom js -->
            <script src="../vista/pantallas/js/custom.js"></script>
            <!-- revolution js files -->
            <script src="../vista/pantallas/revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="../vista/pantallas/revolution/js/jquery.themepunch.revolution.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.video.min.js"></script>
<?php 
	require_once('../modelo/usuarios.php');
	require_once('../modelo/salud.php');
	$newuser = new usuarios();
	$newhealth = new salud();
	#echo "iniciando";
	
	if (isset($_POST['existe'])){
	#echo "validando";
		#echo 'El Usuario : '.$_POST['correo'];
	#var_dump($newuser->getData($_POST['correo']));
		#print_r($newuser->getData($_POST['correo']));
	#echo "----------------------------------------------";
		#print_r(!$newuser->getData($_POST['correo']));
		#print_r($varlor = $newuser->getData($_POST['correo']));
		#print_r($_POST['correo']);
		#	$user = usuarios::getData($_POST['correo']);
		#if($user->email== $_POST['correo'])
		if($newuser->getData($_POST['correo'])){?>
			<!--#var_dump($newuser->getData($_POST['correo']));
			#echo 'El Usuario : '.$_POST['correo'].' ya existe'.'<p>';
			#echo '<a href="../vista/login/singup-login.html">Inicia Sesión</a> </p>';-->
			<script type="text/javascript"> alert("El usuario ya existe utiliza otro correo"); history.back();</script>
			
<?php exit();} 
			
			$newuser->f_name=$_POST['nombre'];
			$newuser->l_name=$_POST['apellido'];
			$newuser->age=$_POST['edad'];
			$newuser->gender=$_POST['genero'];
			$newuser->email=$_POST['correo'];
			$newuser->pass=$_POST['pass'];
			$newuser->inscription=$newuser->date();
			$newuser->level=$_POST['nivel'];


			$newuser->save();
			#echo $newuser->save();

				 
			$user = usuarios::getData($_POST['correo']);

			$newhealth->userid=$user->id;
			$newhealth->height=$_POST['estatura'];
			$newhealth->weight=$_POST['peso'];
			$newhealth->bmi=$newhealth->imc($_POST['peso'], $_POST['estatura']);
			$newhealth->iweight=$newhealth->pideal($_POST['estatura'],$_POST['genero']);
			$newhealth->range=$newhealth->rango($_POST['peso'], $_POST['estatura']);
			#echo 'aqui';
			$newhealth->save();

			#echo $_POST['nombre'].$_POST['apellido'].' Se ha Registrado correctamente. <br>  su Usuario es: '.$_POST['correo'].' y su Contraseña es: '.$_POST['pass'].'<p>';
			#echo '<a href="../vista/login/login-singup.html">Inicia Sesión</a> </p>';
			?>

			<script type="text/javascript"> alert("Bienvenido, Inicia Sesión"); window.location.href="http://localhost/EPI/vista/login/login-singup.html";</script>
			<?php
			#header("Location:../vista/Login/login-singup.html");
		}
			?>
