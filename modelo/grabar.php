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
	public function save()
	{ 
		
		$conn=mysqli_connect(static::SERVER, static::USER, static::PASS, static::DB);
		if (mysqli_connect_errno()) {
    		printf("Falló la conexión: %s\n", mysqli_connect_error());
    		exit();
    	}
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
		$insertar=mysqli_query($conn, $sql);
		if($insertar){
			return true; 
		}
		else{ 
			return false;
			}
	}
	public function getData($usuario)
	{	
		$conn=mysqli_connect(static::SERVER, static::USER, static::PASS, static::DB) or die (mysqli_error());
		$sql="SELECT * FROM ".static::TABLE." WHERE correo='$usuario'";
		$resultado=mysqli_query($conn, $sql) or die (mysqli_error());
		if(mysqli_num_rows($resultado)>0)
		{
			$row=mysqli_fetch_assoc($resultado);
			$registro=new static();
			$registro->setNew(false);
			$registro->setData($row);
			return $registro;

		}else{
			return array();
		}
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
	public function imc($peso, $estatura)
	{
		$_imc = $peso / ($estatura * $estatura);
		return $_imc;
	}
	public function pideal($estatura, $genero)
	#public function pideal($peso, $estatura, $edad, $genero)
	{ #Peso corporal ideal pci en base al imc en 20
		#$pci1 = 2.2 * $20;
		#$pci2 = 3.5 * $20 * ($estatura - 1.5);
		#$PCIimc = -(-$ibw1 - $1bw2);
		if ($genero = 'M') {
			$PIdevine = ((($estatura*100) - 152.4)*0.91 + 50);
			$PIrobinson =((($estatura*100) - 152.4)*0.748 + 52);
			$PImiller =((($estatura*100) - 152.4)*0.555 + 56.2);
			$PIhamwi =((($estatura*100) - 152.4)*1.063 + 48.2);
			$PIprueba = (22 *($estatura*$estatura));
			$_pideal = ($PIdevine + $PIrobinson + $PImiller + $PIhamwi + $PIprueba) / 5; 

		}elseif ($genero = 'F') {
			$PIdevine = ((($estatura*100) - 152.4)*0.91 + 45.5);
			$PIrobinson =((($estatura*100) - 152.4)*0.669 + 49);
			$PImiller =((($estatura*100) - 152.4)*0.5354 + 53.1);
			$PIhamwi =((($estatura*100) - 152.4)*0.866 + 45.5);
			$PIprueba = (22 *($estatura*$estatura));
			$_pideal = ($PIdevine + $PIrobinson + $PImiller + $PIhamwi + $PIprueba) / 5; 
			}

		
		#Porcentaje de Peso Ideal
		#$PIPorc = ($peso/$PI) * 100;	
		return $_pideal;
	}
	public function rango($peso, $estatura)
	{
		$_imc=$peso / ($estatura * $estatura);
		#echo 'aqui en rango';
		if ($_imc < 16) {$_rango="Desnutrición severa";}
		if ($_imc >=16 && $_imc < 17) {$_rango="Desnutrición Moderada";}
		if ($_imc >=17 && $_imc < 18.5) {$_rango="Desnutrición ligera";}
		if ($_imc >=18.5 && $_imc < 24.91) {$_rango="Peso Normal";}
		if ($_imc >= 24.91 && $_imc < 26.91) {$_rango="Sobrepeso grado I";}
		if ($_imc >= 26.91 && $_imc < 29.91) {$_rango="Sobrepeso grado II (Preobesidad)";}
		if ($_imc >= 29.91 && $_imc < 34.6) {$_rango="Obesidad Tipo I";}
		if ($_imc >= 34.6 && $_imc < 39.91) {$_rango="Obesidad Tipo II";}
		if ($_imc >= 39.91 && $_imc < 49.91) {$_rango="Obesidad Tipo III (Morbida)";}
		if ($_imc > 49.91) {$_rango="Obesidad Tipo IV (Extrema)";}	
		#echo 'aqui en rango';			
		return $_rango;
	}
	
 }
?>