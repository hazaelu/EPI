<?php
require_once 'grabar.php';
class usuarios extends grabar{
	const SERVER="localhost";
	const USER="root";
	const PASS="*123*456*";
	const DB="ensayo";
	const TABLE="usuarios";
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
														'name'=>'registro',
														'type'=>'text',
													     );
		$this->_tablaColumnas['level']=array(
														'name'=>'nivel',
														'type'=>'text',
													     );
	
	}
}
?>