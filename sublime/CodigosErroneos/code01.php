<?php
	function avatarCode($entrada)
	{
		return $entrada*-1;  
		/* He modificado en la funcion php añadiendo "*-1"  :
return $entrada*-1;
porque al valor de salida lo multiplicamos por -1 ( x*-1 ) y asi cambiamos el valor de salida al deseado.*/
	}
?>
<html>
	<head>
		<title>CODE 01</title>
		<style>
		.Funcion{
			border: 1px;
		}
		.OK {
		    background-color: #9CCC65;
		}
		.KO {
		    background-color: #FF7043;
		}
		</style>
	</head>
	<body>
		<?php
			//Si introducimos el valor 0 esperamos que salga el valor 0
			echo "<div class=\"OK\">";
			echo "Valor de entrada=0 valor esperado=0"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(0)." OK</br>";
			echo "</div>";
			//Si introducimos el valor 0 esperamos que salga el valor 0
			echo "<div class=\"KO\">";
			echo "Valor de entrada=1, valor esperado=-1"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(1)." INCORRECTO</br>";
			echo "</div>";
			//Si introducimos el valor -1 esperamos que salga el valor 1
			echo "<div class=\"KO\">";
			echo "Valor de entrada=-1, valor esperado=1"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(-1)." INCORRECTO</br>";
			echo "</div>";
		?>
	</body>
</html>