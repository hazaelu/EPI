<?php
require_once 'grabar.php';
class usuarios extends grabar{
	const SERVER="localhost";
	const USER="root";
	const PASS="*123*456*";
	const DB="ensayo";
	const TABLE="usuarios";
	#const SERVER="database-1.cutvdxplo4yk.us-west-2.rds.amazonaws.com:3306";
	#const USER="epi";
	#const PASS="123456789";
	#const DB="EPI";
	#const TABLE="usuarios";
	public function _usuarios_init()
	{
		$this->_tablaColumnas['id']=array(
														'name'=>'id',
														'type'=>'number',
														'auto'=>true
													     );
		$this->_tablaColumnas['f_name']=array(
														'name'=>'nombre',
														'type'=>'text',
													     );
		$this->_tablaColumnas['l_name']=array(
														'name'=>'apellido',
														'type'=>'text',
													     );
		$this->_tablaColumnas['age']=array(
														'name'=>'edad',
														'type'=>'text',
													     );
		$this->_tablaColumnas['gender']=array(
														'name'=>'genero',
														'type'=>'text',
													     );
		$this->_tablaColumnas['email']=array(
														'name'=>'correo',
														'type'=>'text',
													     );
		$this->_tablaColumnas['pass']=array(
														'name'=>'contrasenia',
														'type'=>'text',
													     );
		$this->_tablaColumnas['inscription']=array(
														'name'=>'inscripcion',
														'type'=>'text',
													     );
		$this->_tablaColumnas['level']=array(
														'name'=>'nivel',
														'type'=>'text',
													     );
	
	}
}
?>