<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>chess board</title>
	<style media="screen">
		table{
			width: 900px;
			border: 2px solid black;
			margin-left: 350px;
		}
		#td1{
			height: 80px;
			width: 80px;
			background-color: white;
		}
		#td2{
			height: 50px;
			width: 50px;
			background-color: black;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Chess Board</h1>
  <table cellspacing="0px" cellpadding="0px">
  	<?php
  		for ($i=1; $i<=8 ; $i++) { 
  			echo "<tr>";
  			for ($j=1; $j<=8 ; $j++) { 
  			  $total=$i+$j;
  			  if ($total%2==0) {
  			  	echo "<td id='td1'> </td>";
  			  }
  			  else{
  			  	echo "<td id='td2'> </td>";
  			  }
  			}
  			echo "</tr>";
  		}
	
    ?>
  </table>
  <h1>By / Muhamad Yasin</h1>
</body>
</html>


