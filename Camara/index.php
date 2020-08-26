<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fallas comunes de cargadores de Laptop</title>
	<style>
ul.contenedor_menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li.item_menu {
  float: left;
}

li a.link_menu {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a.link_menu:hover {
  background-color: #111111;
}
table.horario {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<ul class="contenedor_menu">
  <li class="item_menu"><a class="link_menu" href="http://localhost/" target="">Home</a></li>
  <li class="item_menu"><a class="link_menu" href="https://docs.emmet.io/cheat-sheet/" target="_blank">Emmet</a></li>
  <li class="item_menu"><a class="link_menu" href="#contact" target="_blank">Contact</a></li>
  <li class="item_menu"><a class="link_menu" href="#about" target="_blank">About</a></li>
</ul>
	<h1 style="text-align: center;">Camara</h1>
	
	<p style="text-align: center;">Arquitectura del sistema</p>
	<div align="center">
		<img src="../images/Arquitectura.png" alt="Inductor" style="width:80%;">
	</div>
	<h2 style="text-align: center;">Componentes</h2>
	<ul>
		<li>Modelo de la camara: ov2640</li>
		<li>Modulo ESP32-CAM</li>
	</ul>
	<div align="center">
		<img src="../images/ESP_CAM.jpg" alt="Diodos individuales" style="width:40%;">
	</div>
	<h2 style="text-align: center;">Pasos para programar el modulo</h2>
	<ol>
		<li>Conectar el modulo ESP32-CAM con el programador como se muestra en la figura</li>
		<div align="center">
			<img src="../images/Paso1.png" alt="Inductor" style="width:80%;">
		</div>
	</ol>
	<p>Transformador de alta frecuencia</p>
		<div align="center">
			<img src="../images/Transformador.png" alt="Inductor" style="width:40%;">
		</div>
		<li>Capacitor de alto voltaje: Se necesita un LCR para medirlo</li>
		<li>Fisuras en zonas de soldadura de: 
			<ul>
				<li>Transformador</li>
				<li>Inductores</li>
				<li>Capacitores grandes</li>
				<li>Transistores</li>
			</ul>
		</li>
		<div align="center">
			<img src="../images/Soldadura1.png" alt="Soldadura fisurada" style="width:40%;">
		</div>
		<li>Capacitores inflados</li>
	
</body>
</html>