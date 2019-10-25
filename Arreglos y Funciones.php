<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
</head>
<meta charset="utf-8">
<body>
	<h1>PROMEDIO FUNCIONES Y ARREGLOS PHP</h1>
	<?php
	//ESTA FUNCION ES LA ENCARGA DE OBTENER ELprimeraMateriaOMEDIO GENERAL DE TODOS LOS ALUMNOS
	function primeraMateriaomedioDelSalon($v){
		$resultadoGeneral=0;
		 $contadorGeneral=0;
		foreach ($v as $calificaciones ) {
		for ($i=0; $i < sizeof($calificaciones); $i++) { 
			$contadorGeneral++;
			$resultadoGeneral+=$calificaciones[$i];
	}
	}
	 $primeraMateriaomedio=$resultadoGeneral/$contadorGeneral;
	echo "<br> EL PROMEDIO GENERAL DEL GRUPO ES: ".$primeraMateriaomedio;
	echo "<hr />";
	}



	function primeraMateriaomedioPorAlumno($v){
		$primeraMateriaomedioAlumno;
	$resultadoGeneralAlumno=0;
		 $contadorGeneraladorAlumno=0;
		foreach($v as $calificaciones => $detalles){
	echo "<h1> $calificaciones </h1>";
 
    foreach($detalles as $indice => $valor){
		echo "<p> $valor </p>";
		for ($i=0; $i < 10; $i++) { 
			$contadorGeneraladorAlumno++;
			$resultadoGeneralAlumno+=$valor;
		}
	}
	$primeraMateriaomedioAlumno=$resultadoGeneralAlumno/$contadorGeneraladorAlumno;
	$contadorGeneraladorAlumno=0;
	$resultadoGeneralAlumno=0;
	echo "<br>  PROMEDIO $calificaciones ".$primeraMateriaomedioAlumno;
}
	
	echo "<hr />";
	}

	function primeraMateriaomedioPorMateria($v){
		$primeraMateriaomedioAlumno;
	$resultadoGeneralAlumno=0;
		 $primeraMateria=0;
		 $segundaMateria=0;
		 $terceraMateria=0;
		 $cuartaMateria=0;
		 $quintaMateria=0;
		 $sextaMateria=0;
		
		foreach($v as $calificaciones => $detalles){
 
    foreach($detalles as $indice => $valor){
		 
			if ($indice==0) {
			$primeraMateria+=$valor;
			$primeraMateriaM=$primeraMateria/10;
		}else if ($indice==1) {
			$segundaMateria+=$valor;
			$primeraMateriaM1=$segundaMateria/10;
		}else if ($indice==2) {
			$terceraMateria+=$valor;
			$primeraMateriaM2=$terceraMateria/10;
		}else if ($indice==3) {
			$cuartaMateria+=$valor;
			$primeraMateriaM3=$cuartaMateria/10;
		}else if ($indice==4) {
			$quintaMateria+=$valor;
			$primeraMateriaM4=$quintaMateria/10;
		}else if ($indice==5) {
			$sextaMateria+=$valor;
			$primeraMateriaM5=$sextaMateria/10;
		}
		
			
		}
		
	}
	
	echo "<br>  PROMEDIO DE LA PRIMERA MATERIA  ".$primeraMateriaM;
	echo "<br>  PROMEDIO DE LA SEGUNDA MATERIA  ".$primeraMateriaM1;
	echo "<br>  PROMEDIO DE LA TERCERA MATERIA  ".$primeraMateriaM2;
	echo "<br>  PROMEDIO DE LA CUARTA MATERIA  ".$primeraMateriaM3;
	echo "<br>  PROMEDIO DE LA QUINTA MATERIA  ".$primeraMateriaM4;
	echo "<br>  PROMEDIO DE LA SEXTA MATERIA  ".$primeraMateriaM5;
	
	
	echo "<hr />";
	}

	function primeraMateriaomedioMasAlto($v){
		$resultadoGeneral=0;
		 $contadorGeneral=0;
		foreach ($v as $calificaciones ) {
		for ($i=0; $i < sizeof($calificaciones); $i++) { 
		//echo "<br>".$calificaciones[$i];
			$contadorGeneral++;
			$resultadoGeneral+=$calificaciones[$i];
	}
	}
		
	 $primeraMateriaomedio=$resultadoGeneral/$contadorGeneral;
	 $primeraMateriaomedioAlumno;
	$resultadoGeneralAlumno=0;
		 $contadorGeneraladorAlumno=0;
		 $contadorGeneral2=0;
		 $pos=0;
	 foreach($v as $calificaciones => $detalles){
 
    foreach($detalles as $indice => $valor){
		for ($i=0; $i < 10; $i++) { 
			$contadorGeneraladorAlumno++;
			$resultadoGeneralAlumno+=$valor;
		}
	}
	$primeraMateriaomedioAlu[$contadorGeneral2]=$resultadoGeneralAlumno/$contadorGeneraladorAlumno;
	$posicion=$resultadoGeneralAlumno/$contadorGeneraladorAlumno;
	$pos1=$resultadoGeneralAlumno/$contadorGeneraladorAlumno;
	
	if ($pos1>$primeraMateriaomedio) {
		
		$nom=$calificaciones;
		echo "<p> ALUMNOS CON PROMEDIO ENCIMA DEL DE GRUPO :$nom $pos1 </p>";
		$pos1=$posicion;
		
	}
	if ($pos<$posicion) {
		
		$nom1=$calificaciones;
		$pos=$posicion;
		
	}
	
	$contadorGeneraladorAlumno=0;
	$resultadoGeneralAlumno=0;
	
	$contadorGeneral2++;
	 
}
			sort($primeraMateriaomedioAlu);
		echo "<p> MEJOR PROMEDIO ALUMNO:$nom1 $primeraMateriaomedioAlu[9] </p>";
	}
	
	?>

		<?php
		$calificacionesPorSemestre= array("Deisy" => $calificaciones = array(75,80,70,90,58,100),
										"Marco" => $calificaciones = array(70,50,60,85,90,100),	
										"Jose" => $calificaciones = array(85,80,90,70,78,90),
										"Esteban" => $calificaciones = array(56,75,90,98,60,72),
										"Manuel" => $calificaciones = array(85,80,90,70,60,58),
										"Gonzalo" => $calificaciones = array(100,80,100,70,78,75),
										"Octaviano" => $calificaciones = array(100,100,90,90,90,95),
										"Leo" => $calificaciones = array(100,50,91,50,70,50),
										"Gerardo" => $calificaciones = array(93,93,92,89,87,99),
										"David" => $calificaciones = array(85,60,86,70,78,76)
									);
		
		
		primeraMateriaomedioDelSalon($calificacionesPorSemestre);
		primeraMateriaomedioPorAlumno($calificacionesPorSemestre);
		primeraMateriaomedioPorMateria($calificacionesPorSemestre);
		primeraMateriaomedioMasAlto($calificacionesPorSemestre);
		?>

</body>
</html>