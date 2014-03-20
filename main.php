<? 
	session_start();

	include_once 'GraphClass/Vertex.php';
	include_once'GraphClass/Edge.php';
	include_once'GraphClass/Graph.php';
?>

<html>
	<script type="text/javascript">
	function displaySize(val) {
		document.getElementById("sizedisplay").innerHTML=val;
	}
	function displayPoints(val) {
		document.getElementById("numberofpoints").innerHTML=val;
	}
	</script>

<head>
	<link type="text/css" rel="stylesheet" href="CSS/topstyle.css" />
</head>


<body>
<?
	echo "<h1>LANDING PAGE</h1>"
?>


<form action="results.php" method="post">
	<table>
	  <tr>
	    <td>
		Graph Size (Pixels):
	    </td> <td>
		<input type="range" name="maxsize" min="100" max="1000" step="10"
			onchange="displaySize(this.value)">
	    </td> <td>
		<span id="sizedisplay">550</span>
	    </td>
	  </tr> <tr>
	    <td>
		Number of Vertices:
	    </td> <td>
		<input type="range" name="points" min="5" max="100" step="5"
			onchange="displayPoints(this.value)">
	    </td> <td>
		<span id="numberofpoints">55</span>
	    </td>
	  </tr>
	</table>

	<input class="button" type="submit" value="PROCESS GRAPH">
	
</form>


</br>
</br>
</body
</html>

<?php
?>
