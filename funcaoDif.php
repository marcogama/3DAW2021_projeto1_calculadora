<!DOCTYPE html>
<html>
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
											if (empty($_POST["segNum"])){
													                    $segNumErr="Insira o primeiro numero";
											}else{
											    $segNum=$_POST["segNum"];
												if (!preg_match("[0-9]",$segNum)){
														                        $segNumErr="Insira apenas numeros inteiros";
												} 
											}
											echo "A diferenca eh:" .dif($_POST["primNum"],$_POST["segNum"]);
	}
	function dif($num1,$num2){
	                        return $num1-$num2;
	}
?>
</html>