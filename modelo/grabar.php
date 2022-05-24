<?php 

class grabar{
	protected $_new;
	protected $_atributos=array();
	protected $_tablaColumnas=array();
	
	public function __construct(){
		
		$this->_new=true;
		$this->_usuarios_init();
		$this->_actividades_init();
		$this->_salud_init();
	}
	public function __set($attribute, $value)
	{
		$this->_atributos[$attribute]=$value;
	}
	public function __get($attribute)
	{
		return $this->_atributos[$attribute];
	} 
	protected function _usuarios_init()
	{

	}
	protected function _actividades_init()
	{

	}
	protected function _salud_init()
	{

	}
	public function setNew($value){
		$this->_new=$value;
	}
	public function setData($row){
		foreach ($this->_tablaColumnas as $key => $data)
		{
			if(isset($row[$data['name']])){
				$this->_atributos[$key] = $row[$data['name']];
			}
		}
	}
	public function hour()
	{	
		date_default_timezone_set('America/Panama');
		$_hour=date("h:i:s A  ");
		return $_hour;
		
	}
	public function date()
	{	
		date_default_timezone_set('America/Panama');
		$_date=date("d-m-Y");
		return $_date;
	}
	public function save()
	{ 
		$conn=mysql_connect(static::SERVER, static::USER, static::PASS) or die (mysql_error());
		mysql_select_db(static::DB,$conn);
		$columns="";
		$values="";
		foreach ($this->_tablaColumnas as $key => $data) {
			if(!isset($data['auto'])) $data['auto']=false;
			if(!$data['auto'])
			{	if(!empty($columns)){
					$columns.=",";
				}
				$columns.=$data['name'];
				if(!empty($values)){
					$values.=",";
				}
				if($data['type']=='text'){
					$values.="'".$this->_atributos[$key]."'";
				}else{
					$values.=$this->_atributos[$key];
				}

			}
		}
		$sql="INSERT INTO ". static::TABLE." ($columns) VALUES ($values)";
		$insertar=mysql_query($sql,$conn) or die (mysql_error());
		if($insertar){
			return true; 
		}
		else{ 
			return false;
			}
	}
	public function getData($usuario)
	{	
		$conn=mysql_connect(static::SERVER, static::USER, static::PASS) or die (mysql_error());
		mysql_select_db(static::DB, $conn);
		$sql="SELECT * FROM ".static::TABLE." WHERE correo='$usuario'";
		$resultado=mysql_query($sql, $conn) or die (mysql_error());
		if(mysql_num_rows($resultado)>0)
		{
			$row=mysql_fetch_assoc($resultado);
			$registro=new static();
			$registro->setNew(false);
			$registro->setData($row);
			return $registro;

		}else{
			return array();
		}
	}
 }
?>