<?php
//require_once $_SERVER["DOCUMENT_ROOT"] . "/cl_Business/conn/Connection.php";
//require_once $_SERVER["DOCUMENT_ROOT"] . "/cl_Business/class_lib.php";


function choose_plan(){
	
	$TypePlan = $_SESSION['lQuestion'][3]->get_OptionalArg();
	
		if($TypePlan == "ROBO")
		{
			$index = 0;
			
			$plans = array("RCC" => $_SESSION['Scoring']["RCC"], "RCM" => $_SESSION['Scoring']["RCM"], "RCB" => $_SESSION['Scoring']["RCB"]);
			
			asort($plans);
			
			$indexPlan = array(0 => "", 1 => "", 2 => "");
			
			$indexPlanValue = array(0 => 0, 1 => 0, 2 => 0);
			
			foreach ($plans as $key => $val) {
				$indexPlan[$index] = $key;
				$indexPlanValue[$index] = $val;
				$index++;
			}
			
			$index = 0;
			
			if($indexPlanValue[0] <> $indexPlanValue[1] && $indexPlanValue[0] <> $indexPlanValue[2] && $indexPlanValue[1] <> $indexPlanValue[2])
			{
				$TypePlan = $indexPlan[1];
				
			}
			else
			{
				if($indexPlanValue[0] == $indexPlanValue[1])
				{
					if($indexPlan[0] == "RCC" || $indexPlan[1] == "RCC")
						$TypePlan = "RCC";
					else
						if($indexPlan[0] == "RCM" || $indexPlan[1] == "RCM")
							$TypePlan = "RCM";
						else
							$TypePlan = "RCB";					
				}
				else
				{
					if($indexPlanValue[0] == $indexPlanValue[2])
					{
						if($indexPlan[0] == "RCC" || $indexPlan[2] == "RCC")
							$TypePlan = "RCC";
						else
							if($indexPlan[0] == "RCM" || $indexPlan[2] == "RCM")
								$TypePlan = "RCM";
							else
								$TypePlan = "RCB";					
					}
					else
					{
						if($indexPlanValue[1] == $indexPlanValue[2])
						{
							if($indexPlan[1] == "RCC" || $indexPlan[2] == "RCC")
								$TypePlan = "RCC";
							else
								if($indexPlan[1] == "RCM" || $indexPlan[2] == "RCM")
									$TypePlan = "RCM";
								else
									$TypePlan = "RCB";						
						}
					}
				}
			}
			//$_SESSION['Scoring']["RCC"]
			//$_SESSION['Scoring']["RCM"]
			//$_SESSION['Scoring']["RCB"]
		}
		else
		{
			
			$index = 0;
			
			$plans = array("TREC" => $_SESSION['Scoring']["TREC"], "TREM" => $_SESSION['Scoring']["TREM"], "TREB" => $_SESSION['Scoring']["TREB"]);
			
			asort($plans);
			
			$indexPlan = array(0 => "", 1 => "", 2 => "");
			
			$indexPlanValue = array(0 => 0, 1 => 0, 2 => 0);
			
			foreach ($plans as $key => $val) {
				$indexPlan[$index] = $key;
				$indexPlanValue[$index] = $val;
				$index++;
			}
			
			$index = 0;
			
			if($indexPlanValue[0] <> $indexPlanValue[1] && $indexPlanValue[0] <> $indexPlanValue[2] && $indexPlanValue[1] <> $indexPlanValue[2])
			{
				$TypePlan = $indexPlan[1];
				
			}
			else
			{
				
			
				if($indexPlanValue[0] == $indexPlanValue[1])
				{
					if($indexPlan[0] == "TREC" || $indexPlan[1] == "TREC")
						$TypePlan = "TREC";
					else
						if($indexPlan[0] == "TREM" || $indexPlan[1] == "TREM")
							$TypePlan = "TREM";
						else{
							$TypePlan = "TREB";	
						}				
				}
				else
				{
					if($indexPlanValue[0] == $indexPlanValue[2])
					{
						if($indexPlan[0] == "TREC" || $indexPlan[2] == "TREC")
							$TypePlan = "TREC";
						else
							if($indexPlan[0] == "TREM" || $indexPlan[2] == "TREM")
								$TypePlan = "TREM";
							else{
								$TypePlan = "TREB";	
							}				
					}
					else
					{
						if($indexPlanValue[1] == $indexPlanValue[2])
						{
							if($indexPlan[1] == "TREC" || $indexPlan[2] == "TREC")
								$TypePlan = "TREC";
							else
								if($indexPlan[1] == "TREM" || $indexPlan[2] == "TREM")
									$TypePlan = "TREM";
								else
								{
									$TypePlan = "TREB";		
								}				
						}
					}
				}
			}	
			
			$TypePlan = "RCB";
			//$_SESSION['Scoring']["TREC"]
			//$_SESSION['Scoring']["TREM"]
			//$_SESSION['Scoring']["TREB"]
		}	
		
	//echo $TypePlan;

	//$TypePlan = "RCB";
	
	$mysqli = open_conection();
	//echo "<script>console.log( 'Debug Objects, entro al FINAL else: " . $TypePlan . "' );</script>";
	$query = "SELECT `id`, `type`, `plan`, `planlabel`, `image`, `amountplan`, `costdaylabel`, `costday`, `coverage1label1`, `coverage1`, `coverage1label2`, `amount1`, `coverage2label1`, `coverage2`, `coverage2label2`, `amount2`, `buttonlabel`, `buttonlabel2`, `buttonlabel3`, `randombutton`, `footlabel`, `coveragepdf` FROM `mplan` WHERE `type` = '".$TypePlan."' ";
	
	$result = $mysqli->query($query);

	if ($result->num_rows > 0) { //Datos del Plan
		
		$lPlan = array();
		
		while($row = $result->fetch_assoc()) {
			
			$ValuePlan = new Plan(); //Objeto Nuevo Plan
			
			$ValuePlan->set_PlanID($row["id"]);
			$ValuePlan->set_Type($row["type"]);
			$ValuePlan->set_PlanName($row["plan"]);
			$ValuePlan->set_PlanLabel($row["planlabel"]);
			$ValuePlan->set_ImagePlan($row["image"]);
			$ValuePlan->set_amountPlan($row["amountplan"]);
			$ValuePlan->set_CostdayLabel($row["costdaylabel"]);
			$ValuePlan->set_amountDaily($row["costday"]);
			$ValuePlan->set_coverage1label1($row["coverage1label1"]);			
			$ValuePlan->set_coverage1($row["coverage1"]);
			$ValuePlan->set_coverage1label2	($row["coverage1label2"]);	
			$ValuePlan->set_amount1($row["amount1"]);
			$ValuePlan->set_coverage2label1($row["coverage2label1"]);
			$ValuePlan->set_coverage2($row["coverage2"]);
			$ValuePlan->set_coverage2label2($row["coverage2label2"]);
			$ValuePlan->set_amount2($row["amount2"]);
			$ValuePlan->set_buttonlabel($row["buttonlabel"]);
			$ValuePlan->set_buttonlabel2($row["buttonlabel2"]);
			$ValuePlan->set_buttonlabel3($row["buttonlabel3"]);
			$ValuePlan->set_footlabel($row["footlabel"]);
			$ValuePlan->set_coveragepdf($row["coveragepdf"]);
			$ValuePlan->set_randombutton($row["randombutton"]);
			array_push($lPlan, $ValuePlan);
			
		}
	} else {
		echo "0 results plan ".$TypePlan;
	}
	
	
	
	
	
	//Validar si existen planes para la seleccion del usuario
	if(count($lPlan) == 0)
	{
		echo "0 results plan";
	}
	else
	{
		if(count($lPlan) > 1)//SI hay mas de un plan escoger uno al azar
		{
			$_SESSION['Plan'] = $lPlan[rand(0,(count($lPlan)) - 1)];
		}
		else
		{
			$_SESSION['Plan'] = $lPlan[0];
		}
	}
	
	//Escoger etiqueta del boton
	if((int)$_SESSION['Plan']->get_randombutton() == 1)
	{
		$nEtiqueta = rand(1,3);
		
		if($nEtiqueta == 1)
		{
			$_SESSION['Plan']->set_NumButtonlabelFront($nEtiqueta);
			$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel());	
		}
		else
		{
			if($nEtiqueta == 2)
			{
				$_SESSION['Plan']->set_NumButtonlabelFront($nEtiqueta);
				$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel2());
			}
			else
			{
				$_SESSION['Plan']->set_NumButtonlabelFront($nEtiqueta);
				$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel3());				
			}
		}
	}
	else
	{
		$_SESSION['Plan']->set_NumButtonlabelFront(1);
		$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel());	
	}
	
	//Actualizar el Contador del Plan Escogido
	$query = "UPDATE `mplan` SET `ntimes`=`ntimes` + 1 WHERE `id` = ".$_SESSION['Plan']->get_PlanID();

	$resultCoverage = $mysqli->query($query);
	//Fin Actualizar Contador de Planes
	
	
	//Cobertura del Plan
	$CoveragePlan = array();
	
	$query = "SELECT `id`, `idplan`, `coverage`, `amount` FROM `mincludeplan` WHERE `deleted_at` is null and `idplan` = ".$_SESSION['Plan']->get_PlanID();

	$resultCoverage = $mysqli->query($query);

	if ($resultCoverage->num_rows > 0) { //Datos del Plan				
		
		while($row = $resultCoverage->fetch_assoc()) {
			
			array_push($CoveragePlan, $row);
			
		}
	} else {
		echo "0 results plan";
	}	
	
	$mysqli->close();
	
	$_SESSION['CoveragePlan'] = $CoveragePlan;
	
	//print_r($_SESSION['Plan']);
	//print_r($CoveragePlan);
}

?>