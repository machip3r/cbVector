<?php
	include_once "model/model.php";
	$bd=new model();
	$resultado=$bd->mostrarCombos();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="view/css/cosmo.css">
	<link rel="stylesheet" type="text/css" href="view/css/btstrp.css">
	<link rel="stylesheet" type="text/css" href="view/css/stylesheet.css">
	<title>Calculadora Vectores</title>
</head>
<body>
	<center>
		<div id="general-container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  				<h3 style="color:white">Calculadora de Vectores</h3>
  				<ul class="nav navbar-nav pull-xs-right">
    				<li class="nav-item">
  						<a href="view/about.php" style="margin-left:800px; color:white; font-size:18px">Acerca de</a>
   					</li>
				</ul>
			</nav>
			<div id="container">
				<form action="view/resultado.php" method="POST">
	                <div class="datGeneral" id="datGeneral" style="width:40%; text-align:center;">
						<table style="width:100%">
							<tr>
								<td><h3>Unidad</h3><select name="unidad" id="unidad" style="width:100%; height:50px" class="form-control" onchange="cambiarTitulo();" required><option value="">¿Qué unidad deseas manejar para tus medidas?</option>
				                    <option value="VECTOR">VECTOR</option>
				                    <option value="N">NEWTONS</option>
				                    <option value="M">METROS</option>
				                    <option value="M/S">METROS SOBRE SEGUNDO</option>
				                    <option value="M/S2">METROS SOBRE SEGUNDO AL CUADRADO</option>
						    	</select></td>
						    </tr> 
						</table>
					</div>
					<div class="add" id="add">
						<table style="width:100%">
							<tr>
								<td colspan="3" id="tdinfo"><h3>Título:</h3></td>
							</tr>
							<tr>
								<td colspan="3"><input class="form-control" style="width:60%" type="text" id="titulo1" name="titulo1" placeholder="Nombre" value="VECTOR1" autofocus autocomplete="off" required></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3></td><td id="tdinfo" colspan="2"><h3>Ángulo de inclinación:</h3></td>
							</tr>
							<tr>
								<td style="padding:10px"><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud1" placeholder="¿Cuánto mide el vector?" required></td><td style="padding:10px"><input class="form-control" style="width:200px;" type="number" maxlength="3" max="360" min="0" maxlength="3" max="360" min="0" id="intext" name="angulo1" placeholder="Ángulo" autocomplete="off" required><strong style="font-size:20px">°</strong></td><td style="padding:10px"><b>NOTA: </b><font color="red">Debes poner el ángulo desde cero.</font></td>
							</tr>
						</table>
					</div>
					<div class="add" id="add2">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo2" name="titulo2" placeholder="Nombre" value="VECTOR2" autocomplete="off" required></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud2" placeholder="¿Cuánto mide el vector?" required></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo2" placeholder="Ángulo" autocomplete="off" required></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add3">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo3" name="titulo3" placeholder="Nombre" value="VECTOR3" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud3" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo3" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add4">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo4" name="titulo4" placeholder="Nombre" value="VECTOR4" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud4" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo4" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add5">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo5" name="titulo5" placeholder="Nombre" value="VECTOR5" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud5" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo5" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add6">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo6" name="titulo6" placeholder="Nombre" value="VECTOR6" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud6" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo6" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add7">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo7" name="titulo7" placeholder="Nombre" value="VECTOR7" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud7" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo7" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add8">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo8" name="titulo8" placeholder="Nombre" value="VECTOR8" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud8" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo8" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add9">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo9" name="titulo9" placeholder="Nombre" value="VECTOR9" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud9" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo9" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add10">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo10" name="titulo10" placeholder="Nombre" value="VECTOR10" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud10" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo10" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add11">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo11" name="titulo11" placeholder="Nombre" value="VECTOR11" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud11" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo11" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add12">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo12" name="titulo12" placeholder="Nombre" value="VECTOR12" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud12" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo12" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add13">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo13" name="titulo13" placeholder="Nombre" value="VECTOR13" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud13" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo13" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add14">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo14" name="titulo14" placeholder="Nombre" value="VECTOR14" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud14" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo14" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<div class="add" style="display:none" id="add15">
						<table style="width:100%">
							<tr>
								<td colspan="4" id="tdinfo"><h3>Título:</h3><input class="form-control" style="width:60%" type="text" id="titulo15" name="titulo15" placeholder="Nombre" value="VECTOR15" autocomplete="off"></td>
							</tr>
							<tr>
								<td id="tdinfo"><h3>Magnitud:</h3><input class="form-control" maxlength="10" type="number" step="any" id="intext" autocomplete="off" name="magnitud15" placeholder="¿Cuánto mide el vector?"></td><td id="tdinfo"><h3>Ángulo de inclinación:</h3><table><tr><td><input class="form-control" style="width:200px; margin-left:100px" type="number" maxlength="3" max="360" min="0" id="intext" name="angulo15" placeholder="Ángulo" autocomplete="off"></td><td><h2>°</h2></td></tr></table></td>
							</tr>
						</table>
					</div>
					<button type="submit" class="btn btn-primary" onclick="enviar();" style="width:30%; height:50px; float:right; margin-right:205px; margin-bottom:40px;" type="button">Realizar la sumatoria</button>
					<section id="contador" style="display:none;"></section>
						<input type="hidden" name="reload" value="0">
				</form>
				<br>
				<br>
				<table id="table-btn-bottom">
					<tr>
						<td><button type="button" class="btn btn-success" id="anadir" style="width:95%; height:50px" onclick="anadir();">Añadir otro vector</button></td> <td><button class="btn btn-danger" id="elimina" name="elimina" style="width:95%; height:50px" onclick="elimina();">Eliminar vector</button></td>
					</tr>
				</table>
				<br>
				<br>
			</div>
		</div>
	</center>
</body>
<script src="controller/js/jquery.js"></script>
<script src="controller/js/config.js"></script>
</html>