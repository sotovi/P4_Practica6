<html>
 <head>  
<h1>Registros</h1> 
 </head>
 
 <body>      
 
<table border="1">

 <?php
 $conexion = mysql_connect("localhost","root","");
 mysql_select_db("directorio");
 $consulta = "SELECT * FROM contacto";
 
 $ejecutar_consulta = mysql_query($consulta,$conexion);
 
 
 while ($registro = mysql_fetch_array($ejecutar_consulta))
 {   
 echo "<tr>";
      echo "<td>".$registro["id"]." </td> ";
	
	  echo "<td>".$registro["nombre"]." </td>  ";
	  echo "<td>".$registro["direccion"]." </td>  ";
	  echo "<td>".$registro["telefono"]." </td> ";
	
	  echo "<br/ >";
 echo "</tr>";
 }
 ?>
 <!-- Cerramos tabla -->

 </table>
<br/ >

<form method="post" action = "home2.php">
<input type = "submit" value="Editar"/>
<input type = "submit" value="Eliminar"/>
<input type = "submit" value="Ver"/>
 </body>                                                                 
 </html>