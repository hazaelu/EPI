<?php
require_once 'grabar.php';
class salud extends grabar{
	const SERVER="localhost";
	const USER="root";
	const PASS="*123*456*";
	const DB="ensayo";
	const TABLE="salud";
	#const SERVER="database-1.cutvdxplo4yk.us-west-2.rds.amazonaws.com:3306";
	#const USER="epi";
	#const PASS="123456789";
	#const DB="EPI";
	#const TABLE="usuarios";
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