<!DOCTYPE html>
<html>
<head>
<style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}

#p01 {
  color: blue;
  text-align: center;
}
p.error {
  color: red;
}

a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: blue;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

</style>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://www.w3schools.com/html/styles.css">
<link rel="stylesheet" href="/html/styles.css">
</head>
<body>
	<a href="#C4">Jump to Chapter 4</a><br>
	<a href="http://localhost/h2/index.php#C5">Jump to Chapter 5 en otra pagina</a>


<!--ctrl+F9 ordena alfabeticamente
id debe ser unico
class se puede repetir-->
<h1>This is a heading</h1>
<p>This is a paragraph.</p>
<!--
  -->
  <h1>CSS selectivo</h1>
<p class="error">I am different</p>
<p id="p01">I am different</p>
<p class="error">I am different</p>
<!-- CSS selectivo
p    {color: red;}

#p01 {
  color: blue;
  text-align: center;
}
p.error {
  color: red;
}
-->
<p>imagen como link</p>
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>
<p>boton como link</p>
<button onclick="document.location = 'default.asp'">HTML Tutorial</button>
<p>link con explicacion</p>
<a href="https://www.w3schools.com/html/" title="Go to W3Schools HTML section">Visit our HTML Tutorial</a>
<a href="https://www.w3schools.com/html/default.asp">HTML tutorial</a>
<h2 id="C4">Chapter 4</h2>
<a href="/html/default.asp">HTML tutorial</a>
<a href="default.asp">HTML tutorial</a>


</body>
</html>