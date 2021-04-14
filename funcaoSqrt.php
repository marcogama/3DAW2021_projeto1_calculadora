<?php
    $primNumErr=$segNumErr="";
	$primNum=$segNum="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
			                                if (empty($_POST["primNum"])){
													                    $primNumErr="Insira o primeiro numero";
											}else{
											    $primNum=$_POST["primNum"];
												if (!preg_match("[0-9]",$primNum)){
														                        $primNumErr="Insira apenas numeros inteiros";
												} 
											}
											if (!empty($_POST["segNum"])){
													                    $segNumErr="Nao preencha este campo";
											}
											echo "A raiz quadrada eh:" .sqrt($_POST["primNum"],$_POST["segNum"]);
	}
	function sqrt($num1,$num2){
	                        return $num1**"0.5";
	}
?>