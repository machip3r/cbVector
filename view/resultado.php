<?php
	include_once "../model/model.php";
	$bd=new model();

	$unidad=$_POST['unidad'];
	$escala=$_POST['escala'];
	$cont=$_POST['contador1'];

	$query="update magnitud set magnitud =".$cont." ";
	$rsUpdateMagnitud=$bd->ejecutar($query);

	$rsMagnitud=$bd->getMagnitud(1);
	$rowMagnitud=mysqli_fetch_assoc($rsMagnitud);

	session_start();
	$_SESSION['vector']=$rowMagnitud;

	$magnitud=array();
	array_push($magnitud, $_POST["magnitud1"], $_POST["magnitud2"], $_POST["magnitud3"], $_POST["magnitud4"], $_POST["magnitud5"], $_POST["magnitud6"], $_POST["magnitud7"], $_POST["magnitud8"], $_POST["magnitud9"], $_POST["magnitud10"], $_POST["magnitud11"], $_POST["magnitud12"], $_POST["magnitud13"], $_POST["magnitud14"], $_POST["magnitud15"]);

	$angulo=array();
	array_push($angulo, $_POST["angulo1"], $_POST["angulo2"], $_POST["angulo3"], $_POST["angulo4"], $_POST["angulo5"], $_POST["angulo6"], $_POST["angulo7"], $_POST["angulo8"], $_POST["angulo9"], $_POST["angulo10"], $_POST["angulo11"], $_POST["angulo12"], $_POST["angulo13"], $_POST["angulo14"], $_POST["angulo15"]);

	$titulo=array();
	 array_push($titulo, $_POST["titulo1"], $_POST["titulo2"], $_POST["titulo3"], $_POST["titulo4"], $_POST["titulo5"], $_POST["titulo6"], $_POST["titulo7"], $_POST["titulo8"], $_POST["titulo9"], $_POST["titulo10"], $_POST["titulo11"], $_POST["titulo12"], $_POST["titulo13"], $_POST["titulo14"], $_POST["titulo15"]);

	for($i=0; $i<$_SESSION['vector']['magnitud']; $i++) {
	    $num=$magnitud[$i]*(sin(deg2rad(($angulo[$i]))));
	    $SumFy=$SumFy+$num;
	}

	for($i=0; $i<$_SESSION['vector']['magnitud']; $i++) {
	    $num=$magnitud[$i]*(cos((deg2rad($angulo[$i]))));
	    $SumFx=$SumFx+$num;
	}

	$r=sqrt(($SumFx*$SumFx)+($SumFy*$SumFy));
	$ra=rad2deg((atan($SumFy/$SumFx)));

	if ($ra<0){
		$ra+=180;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cosmo.css">
	<link rel="stylesheet" type="text/css" href="css/btstrp.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<title>Resultado</title>
</head>
<body>
	<center>
		<div id="general-container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a href="../index.php"><img src="img/iconoRegresar.png" style="width:30px"></a>
				&emsp;
  				<h3 style="color:white">Calculadora de Vectores</h3>
			</nav>
			<div id="container">
				<table id="table-container">
					<tr>
						<td>
							<div class="info">
								<h2>Información de vectores</h2>
								<br>
								<table id="table-info">
									<tr>
										<td style='padding:5px'><b>Titulo</b></td><td style='padding:5px'><b>Magnitud</b></td><td style='padding:5px'><b>Angulo</b></td>
									</tr>
									<?php
										if ($unidad=="V") {
											$unidad="";
										}
										for($i=0; $i<$_SESSION['vector']['magnitud']; $i++) {
											echo "<tr>";
											echo "<td style='padding:5px'>$titulo[$i]</td><td style='padding:5px'>$magnitud[$i] $unidad</td><td style='padding:5px'>$angulo[$i]°</td>";
											echo "</tr>";
										}
									 ?>
								</table>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<table id="table-result" class="table table-hover">
					    		<tr>
					      			<td style="padding:5px"><b>Sumatoria en eje x (ΣFx)</b></td><td style="padding:5px"><?php echo $SumFx; ?></td>
					    		</tr>
					    		<tr>
					    			<td style="padding:5px"><b>Sumatoria en eje y (ΣFy)</b></td><td style="padding:5px"><?php echo $SumFy; ?></td>
					    		</tr>
					    		<tr>
					    			<td style="padding:5px"><b>Longitud de la resultante (R)</b></td><td style="padding:5px"><?php echo $r; ?></td>
					    		</tr>
					    		<tr>
					    			<td style="padding:5px"><b>Angulo de inclinacion de la resultante (θ)</b></td><td style="padding:5px"><?php echo $ra; ?></td>
					    		</tr>
					       	</table>
						</td>
					</tr>
				</table>
				<iframe src="../controller/grafica1.php?eFx=<?php echo $SumFx ?>&eFy=<?php echo $SumFy ?>&l_resultante=<?php echo $r ?>&a_resultante=<?php echo $ra ?>" width="505px" height="505px"></iframe>
			</div>
		</div>
	</center>
</body>
<script src="../controller/js/jquery.js"></script>
<script src="../controller/js/config.js"></script>
</html>
