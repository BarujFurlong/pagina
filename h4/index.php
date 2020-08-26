<!DOCTYPE html>
<html>
<head>
<style>
/* This stylesheet sets the width of all images to 100%: */
/*img {*/
/*  width: 100%;*/
/*}*/
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
table {
  border-spacing: 5px;
}
table#t01 {
  width: 100%;
  background-color: #f1f1c1;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
  background-color: #fff;
}
table#t01 th {
  color: white;
  background-color: black;
}
</style>
</head>
<body>

<h2>Styling Images</h2>
<p>The image below has the width attribute set to 128 pixels, but the stylesheet overrides it, and sets the width to 100%.</p>
<img src="html5.gif" alt="HTML5 Icon" width="128" height="128">

<p>The image below uses the style attribute, where the width is set to 128 pixels which overrides the stylesheet:</p>
<img src="/images/html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
<!--
	Imagenes flotantes
<p><img src="smiley.gif" alt="Smiley face" style="float:right;width:42px;height:42px;">
The image will float to the right of the text.</p>

<p><img src="smiley.gif" alt="Smiley face" style="float:left;width:42px;height:42px;">
The image will float to the left of the text.</p>
-->
<img src="workplace.jpg" alt="Workplace" usemap="#workmap">

<map name="workmap">
  <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.google.com/search?q=computer&tbm=isch&ved=2ahUKEwi6hvfY9tXpAhUJRawKHWF4B6sQ2-cCegQIABAA&oq=computer&gs_lcp=CgNpbWcQAzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzICCAA6BAgjECdQg3JYsHxghn9oAHAAeACAAeQCiAHlDJIBBzAuNC4yLjKYAQCgAQGqAQtnd3Mtd2l6LWltZw&sclient=img&ei=vlnPXrqvCYmKsQXh8J3YCg&bih=576&biw=1366">
  <area shape="rect" coords="290,172,333,250" alt="Phone" href="https://www.google.com/search?q=phone&tbm=isch&ved=2ahUKEwiEzIfW9tXpAhXGYqwKHYWZBEwQ2-cCegQIABAA&oq=phone&gs_lcp=CgNpbWcQAzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzICCAAyBAgAEEMyBAgAEEMyAggAOgQIIxAnUK4KWJ0QYOIRaABwAHgAgAGrAYgBvwWSAQMwLjWYAQCgAQGqAQtnd3Mtd2l6LWltZw&sclient=img&ei=uFnPXoSQCMbFsQWFs5LgBA&bih=576&biw=1366">
  <area shape="circle" coords="337,300,44" alt="Coffee" href="https://www.google.com/search?q=coffe&tbm=isch&ved=2ahUKEwifwPnh9tXpAhUNNa0KHVS4D_EQ2-cCegQIABAA&oq=coffe&gs_lcp=CgNpbWcQA1D3pAFY76oBYLOuAWgAcAB4AIABAIgBAJIBAJgBAKABAaoBC2d3cy13aXotaW1n&sclient=img&ei=0VnPXt-TBI3qtAXU8L6IDw&bih=576&biw=1366">
</map>
<!--<area shape="circle" coords="337,300,44" onclick="myFunction()"> agregar una funcion de javascript-->
<h3>Tablas 1</h3>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
<h3>tablas 2</h3>
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th colspan="2">Telephone</th>
  </tr>
  <tr>
    <td>Bill Gates</td>
    <td>55577854</td>
    <td>55577855</td>
  </tr>
</table>
<h3>tablas 3</h3>
<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>Bill Gates</td>
  </tr>
  <tr>
    <th rowspan="2">Telephone:</th>
    <td>55577854</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
</table>
<h3>tablas 4</h3>
<table style="width:100%">
  <caption>Monthly savings</caption>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$50</td>
  </tr>
</table>
<h3>tablas 5</h3>
<table id="t01">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>jose</td>
    <td>jejej</td>
    <td>92</td>
  </tr>
  <tr>
    <td>baruj</td>
    <td>Jdeackson</td>
    <td>194</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>jose</td>
    <td>jejej</td>
    <td>92</td>
  </tr>
  <tr>
    <td>baruj</td>
    <td>Jdeackson</td>
    <td>194</td>
  </tr>
</table>
<h3>Lista sin orden</h3>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<h3>Lista con orden</h3>
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<h1>LISTAS</h1>
<p>Listas sin orden</p>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<p>Listas ordenadas</p>
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
<p>Lista con descripciones</p>
<dl>
  <dt>Coffee</dt>
  <dd>- black hot drink</dd>
  <dd>- black hot drink</dd>
  <dt>Milk</dt>
  <dd>- white cold drink</dd>
</dl>
<p>Lista con distintos iconos</p>
<ul style="list-style-type:disc;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<ul style="list-style-type:circle;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<ul style="list-style-type:square;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<ul style="list-style-type:none;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
<p>Listas anidadas</p>
<ul>
  <li>Coffee</li>
  <li>Tea
    <ul>
      <li>Black tea</li>
      	<ul>
      		<li>You</li>
      			<ul>
      				<li>Put</li>
      				<li>this</li>
      			</ul>
      		<li>Here</li>
      	</ul>
      <li>Green tea</li>
    </ul>
  </li>
  <li>Milk</li>
</ul>



</body>
</html>