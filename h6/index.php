<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checa we</title>
  <script>
  function funcionaza() {
    document.getElementById("aqui").innerHTML = "Hola we!";
  }
  </script>
<style>
  .cities {
    background-color: black;
    color: white;
    margin: 20px;
    padding: 20px;
  }
</style>
</head>
<body>

<div class="cities">
  <h2>London</h2>
  <p>London is the capital of England.</p>
</div>

<div class="cities">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
</div>

<div class="cities">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>
<h1>Iframe</h1>
<iframe src="otro.php" name="iframe_a"></iframe>
<p><a href="https://www.w3schools.com" target="iframe_a">W3Schools.com</a></p>

<h1 id="demo">Hola</h1>

<script>
document.getElementById("demo").innerHTML = "Hola yo fui modificado por JavaScript!";
document.getElementById("demo").style.fontSize = "25px";
document.getElementById("demo").style.color = "red";
document.getElementById("demo").style.backgroundColor = "yellow";
</script>
<noscript>Sorry, your browser does not support JavaScript!</noscript>

<h1 id="demo">Hola</h1>

<h1>My Web Page</h1>
<p id="aqui">A Paragraph</p>
<button type="button" onclick="funcionaza()">Try it</button>
<h2>base y target para los URLs en comentario</h2>
<!--
  <base href="https://www.w3schools.com/images/" target="_blank">
-->
</body>
</html>