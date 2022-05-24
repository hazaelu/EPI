<?php
require_once 'grabar.php';
class salud extends grabar{
	const SERVER="localhost";
	const USER="root";
	const PASS="*123*456*";
	const DB="ensayo";
	const TABLE="salud";
	public function _salud_init()
	{
		$this->_tablaColumnas['id']=array(
														'name'=>'id',
														'type'=>'number',
														'auto'=>true
													     );
		$this->_tablaColumnas['userid']=array(
														'name'=>'usuarios_id',
														'type'=>'number',
													     );
		$this->_tablaColumnas['weight']=array(
														'name'=>'peso',
														'type'=>'number',
													     );
		$this->_tablaColumnas['height']=array(
														'name'=>'estatura',
														'type'=>'number',
													     );
		$this->_tablaColumnas['bmi']=array(
														'name'=>'imc',
														'type'=>'number',
													     );
		$this->_tablaColumnas['iweight']=array(
														'name'=>'pideal',
														'type'=>'number',
													     );
		$this->_tablaColumnas['range']=array(
														'name'=>'rango',
														'type'=>'text',
													     );
	}
}
?>