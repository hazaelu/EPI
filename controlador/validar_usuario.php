<?php session_start()
	
	$conn=mysql_connect('localhost', 'root', '*123*456*')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
	mysql_select_db('usuarios', $conn)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
	$usuario = strtolower(htmlentities($_POST["correo"], ENT_QUOTES));   
    $password = $_POST["pass"];
     
 	$query=" SELECT contrasenia, correo FROM usuarios". " WHERE correo ='$usuario'";
    $result = mysql_query($query, $conn) or die (mysql_error());
    if($row = mysql_fetch_array($result)){
        if($row["contrasenia"] == $password){
 
            $_SESSION["k_username"] = $row['correo'];
            header("Location: ../vista/pantallas/index.php");
        }else{
            echo 'Contraseña Incorrecta';
            echo '<a href="../vista/login/singup-login.html"> Verificar Contraseña</a>';
        	}
    }else{
        echo 'Usuario no existente en la base de datos';
        echo '<a href="../vista/login/singup-login.html"> Registrate</a>';
    	}
    	
    mysqli_stmt_free_result($result);
 ?>