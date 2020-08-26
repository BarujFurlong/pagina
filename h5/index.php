<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>

<ul class="contenedor_menu">
  <li class="item_menu"><a class="link_menu" href="#home">Home</a></li>
  <li class="item_menu"><a class="link_menu" href="#news">News</a></li>
  <li class="item_menu"><a class="link_menu" href="#contact">Contact</a></li>
  <li class="item_menu"><a class="link_menu" href="#about">About</a></li>
</ul>
<h1>Lista como menu</h1>
<p>Lista ordenada</p>

<!-- CSS selectivo
<h1>CSS selectivo</h1>
<p class="menu">I am different</p>
<p id="p01">I am different</p>
<p class="error">I am different</p>

p    {color: red;}

#p01 {
  color: blue;
  text-align: center;
}
p.error {
  color: red;
}
-->

<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Numeros</p>
<ol type="1">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Letras</p>
<ol type="A">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Letras minusculas</p>
<ol type="a">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Numeros romanos</p>
<ol type="I">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Numeros romanos minusculas</p>
<ol type="i">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Cambiando el digito inicial de la lista</p>
<ol start="50">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Nested HTML Lists (Listas anidadas)</p>
<ol>
  <li>Coffee</li>
  <li>Tea
    <ol>
      <li>Black tea</li>
      <li>Green tea</li>
    </ol>
  </li>
  <li>Milk</li>
</ol>
<h2>Otro tipo de listas</h2>
<dl>
  <dt>Coffee</dt>
  <dd>- black hot drink</dd>
  <dt>Milk</dt>
  <dd>- white cold drink</dd>
</dl>
<h2>Block-level Elements</h2>
Empiezan en una nueva linea y ocupan todo el ancho
<div>Hello World</div>
<h2>Inline Elements</h2>
siguen la misma linea y solo ocupan el espacio que necesitan
<p>hola <span>Hello World</span> aqui esta un ejemplo</p>
<h2>El div</h2>
Se usa como contenedor
<div style="background-color:black;color:white;padding:20px;">
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>
<h2>El span</h2>
Se usa como contenedor de texto usualmente
<h1>My <span style="color:red">Important</span> Heading</h1>



</body>
</html>