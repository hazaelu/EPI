<?php
require_once 'grabar.php';
class actividades extends grabar{
	const SERVER="localhost";
	const USER="root";
	const PASS="*123*456*";
	const DB="ensayo";
	const TABLE="actividades";
	public function _actividades_init()
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
		$this->_tablaColumnas['login']=array(
														'name'=>'isesion',
														'type'=>'text',
													     );
		$this->_tablaColumnas['logout']=array(
														'name'=>'fsesion',
														'type'=>'text',
													     );
		$this->_tablaColumnas['start']=array(
														'name'=>'inicio',
														'type'=>'text',
													     );
		$this->_tablaColumnas['end']=array(
														'name'=>'fin',
														'type'=>'text',
													     );
		$this->_tablaColumnas['time']=array(
														'name'=>'tiempo',
														'type'=>'text',
													     );
		$this->_tablaColumnas['calories']=array(
														'name'=>'calorias',
														'type'=>'text',
													     );
	}
}
?>