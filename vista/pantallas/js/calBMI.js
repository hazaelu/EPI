function calEdad(obj){
	var edad = obj.edad.value;
	if(edad<=10 || edad>=115 || isNaN(edad)) {dRX.innerHTML="<font color = 'Brown'><strong>revisa la edad!!</strong></font>"; obj.edad.value="";}else{dRX.innerHTML="";}
	
}
function calEstatura(obj){
	var estatura = obj.estatura.value;
	if(estatura<=1 || estatura>=2.15 || isNaN(estatura)) {dEX.innerHTML="<font color = 'Brown'><strong>revisa la talla!!</strong></font>"; obj.estatura.value="";}else{dEX.innerHTML="";}
	
}
function calPeso(obj){
	var peso = obj.peso.value;
	if(peso<=25 || peso>=180 || isNaN(peso)) {dPX.innerHTML="<font color = 'Brown'><strong>revisa el peso!!</strong></font>"; obj.peso.value="";}else{dPX.innerHTML="";}
	
}
