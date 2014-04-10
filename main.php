<?php
	session_start();

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
<?php
	echo "<h2>ONLINE ROUTING</h2>";
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
		Vertices:
	    </td> <td>
		<input type="range" name="points" min="5" max="100" step="5"
			onchange="displayPoints(this.value)">
	    </td> <td>
		<span id="numberofpoints">55</span>
	    </td>
	  </tr> <tr>
	    <td>
		Algorithm:
	    </td> <td>
	      <select name="algorithm">
	        <option value="dijkstras">Dijkstras</option>
	        <option value="deluanay">Bowyer-Watson</option>
	        <option value="convex">Jarvis March</option>
	        <option value="none">None (Points Only)</option>
	      </select>
	    </td> <td align="center" style="font-weight: normal;">
		<input type="checkbox" name="circles" value=1>
		Show Circumcircles
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
