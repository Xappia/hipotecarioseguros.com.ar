<?php
class Question{
	
	var $_DQuestion;
	var $_Answer;
	var $_PagCall;
	var $_IndD;
	var $_OptionalArg;
	
	function set_DQuestion($DQuestion){
		$this->_DQuestion = $DQuestion;
	}	
	function get_DQuestion(){
		return $this->_DQuestion;
	}
	
	function set_Answer($Answer){
		$this->_Answer = $Answer;
	}	
	function get_Answer(){
		return $this->_Answer;
	}

	function set_PagCall($PagCall){
		$this->_PagCall = $PagCall;
	}	
	function get_PagCall(){
		return $this->_PagCall;
	}

	function set_IndD($IndD){
		$this->_IndD = $IndD;
	}	
	function get_IndD(){
		return $this->_IndD;
	}
	
	function set_OptionalArg($OptionalArg){
		$this->_OptionalArg = $OptionalArg;
	}	
	function get_OptionalArg(){
		return $this->_OptionalArg;
	}			
}

class Plan{
	
	var $_PlanID;
	var $_Type;
	var $_PlanName;
	var $_PlanLabel;
	var $_ImagePlan;
	var $_amountPlan;
	var $_CostdayLabel;
	var $_amountDaily;
	var $_coverage1label1;
	var $_coverage1label2;
	var $_coverage1;
	var $_amount1;
	var $_coverage2label1;
	var $_coverage2label2;
	var $_buttonlabelFront;
	var $_NumButtonlabelFront;
	var $_buttonlabel;
	var $_buttonlabel2;
	var $_buttonlabel3;	
	var $_footlabel;
	var $_coverage2;
	var $_amount2;
	var $_coveragepdf;
	var $_randombutton;
		
	//Plan ID
	function set_PlanID($PlanID){
		$this->_PlanID = $PlanID;
	}	
	function get_PlanID(){
		return $this->_PlanID;
	}	
	
	//Tipo de Plan
	function set_Type($Type){
		$this->_Type = $Type;
	}	
	function get_Type(){
		return $this->_Type;
	}	
	
	//Nombre del Plan
	function set_PlanName($PlanName){
		$this->_PlanName = $PlanName;
	}	
	function get_PlanName(){
		return $this->_PlanName;
	}
	
	//Etiqueta del Nombre del Plan
	function set_PlanLabel($PlanLabel){
		$this->_PlanLabel = $PlanLabel;
	}	
	function get_PlanLabel(){
		return $this->_PlanLabel;
	}	
	
	//Imagen del Plan
	function set_ImagePlan($ImagePlan){
		$this->_ImagePlan = $ImagePlan;
	}	
	function get_ImagePlan(){
		return $this->_ImagePlan;
	}	

	//Costo del Plan
	function set_amountPlan($amountPlan){
		$this->_amountPlan = $amountPlan;
	}	
	function get_amountPlan(){
		return $this->_amountPlan;
	}
	
	//Label Costo Diario
	function set_CostdayLabel($CostdayLabel){
		$this->_CostdayLabel = $CostdayLabel;
	}	
	function get_CostdayLabel(){
		return $this->_CostdayLabel;
	}	
	
	//Costo Diario
	function set_amountDaily($amountDaily){
		$this->_amountDaily = $amountDaily;
	}	
	function get_amountDaily(){
		return $this->_amountDaily;
	}
	
	//Nombre Cobertura 1
	function set_coverage1($coverage1){
		$this->_coverage1 = $coverage1;
	}	
	function get_coverage1(){
		return $this->_coverage1;
	}
	
	//Etiqueta 1 Cobertura 1
	function set_coverage1label1($coverage1label1){
		$this->_coverage1label1 = $coverage1label1;
	}	
	function get_coverage1label1(){
		return $this->_coverage1label1;
	}

	//Etiqueta 2 Cobertura 1
	function set_coverage1label2($coverage1label2){
		$this->_coverage1label2 = $coverage1label2;
	}
	
	function get_coverage1label2(){
		return $this->_coverage1label2;
	}	
	
	//Monto Cobertura 1
	function set_amount1($amount1){
		$this->_amount1 = $amount1;
	}	
	function get_amount1(){
		return $this->_amount1;
	}
	
	//Nombre Cobertura 2
	function set_coverage2($coverage2){
		$this->_coverage2 = $coverage2;
	}	
	function get_coverage2(){
		return $this->_coverage2;
	}
	
	//Etiqueta 2 Cobertura 1
	function set_coverage2label1($coverage2label1){
		$this->_coverage2label1 = $coverage2label1;
	}	
	function get_coverage2label1(){
		return $this->_coverage2label1;
	}

	//Etiqueta 2 Cobertura 2
	function set_coverage2label2($coverage2label2){
		$this->_coverage2label2 = $coverage2label2;
	}
	function get_coverage2label2(){
		return $this->_coverage2label2;
	}		
	
	//Monto Cobertura 2
	function set_amount2($amount2){
		$this->_amount2 = $amount2;
	}	
	function get_amount2(){
		return $this->_amount2;
	}
	
	//Etiqueta del Boton que se va a mostrar
	function set_NumButtonlabelFront($NumButtonlabelFront){
		$this->_NumButtonlabelFront = $NumButtonlabelFront;
	}
	function get_NumButtonlabelFront(){
		return $this->_NumButtonlabelFront;
	}	
	
	//Etiqueta del Boton que se va a mostrar
	function set_buttonlabelFront($buttonlabelFront){
		$this->_buttonlabelFront = $buttonlabelFront;
	}
	function get_buttonlabelFront(){
		return $this->_buttonlabelFront;
	}	

	//Etiqueta del Boton
	function set_buttonlabel($buttonlabel){
		$this->_buttonlabel = $buttonlabel;
	}
	function get_buttonlabel(){
		return $this->_buttonlabel;
	}
	
	//Etiqueta del Boton2
	function set_buttonlabel2($buttonlabel2){
		$this->_buttonlabel2 = $buttonlabel2;
	}
	function get_buttonlabel2(){
		return $this->_buttonlabel2;
	}

	//Etiqueta del Boton2
	function set_buttonlabel3($buttonlabel3){
		$this->_buttonlabel3 = $buttonlabel3;
	}
	function get_buttonlabel3(){
		return $this->_buttonlabel3;
	}
	
	//Etiqueta de los botones aleatorios
	function set_randombutton($randombutton){
		$this->_randombutton = $randombutton;
	}
	function get_randombutton(){
		return $this->_randombutton;
	}	
	
	//Etiqueta del Pie de la pantalla de plan
	function set_footlabel($footlabel){
		$this->_footlabel = $footlabel;
	}
	function get_footlabel(){
		return $this->_footlabel;
	}
	
	//Obtiene el Nombre del PDF
	function set_coveragepdf($coveragepdf){
		$this->_coveragepdf = $coveragepdf;
	}
	function get_coveragepdf(){
		return $this->_coveragepdf;
	}	
	
}
?>