<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title> Reduction Calculator </title>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/pamcss.css" rel="stylesheet"> 
</head>
<body>
	<p>
		<div id ="calc1" style="margin-left:1%;float:left; width: 35.5%">
			<font color="#AFD464">Calculate your emission reductions</font>
			<img src="img/help.png" style="width:3.8%">
			&nbsp;&nbsp;&nbsp;1.<select style="margin-left:0.5%">
			<option value="sea">Seattle</option>
			<option value="van">Vancouver</option>
			</select>
			<img src="img/help.png" style="width:3.6%">
		</div>

		<div id ="calc2" style="margin-left:2%;float:left; width: 23%">
			2.<select style="margin-left:0.5%">
			<option value="sc1a">Scope 1 Stationary - Natural Gas</option>
			<option value="sc1b">Scope 1 Mobile - Gasoline</option>
			<option value="sc1c">Scope 1 Mobile - Diesel</option>
			<option value="sc2">Scope 2 - Purchased Electricity</option>
			</select>
			<img src="img/help.png" style="width:5.6%">
		</div>

	<div id ="calc3" style="margin-left:2%;float:left; width: 22%">
		3.<?php
		echo "<select>";
		for($i=2000; $i<=2024; $i=$i+1)
			echo "<option value=". $i .">" . $i . "</option>";
		echo "</select>"; 
		?>
		<img src="img/help.png" style="width:5.7%">
	</div>

	<div id ="calc3" style="margin-right:25%;float:right; width: 13.8%">
		with&nbsp;&nbsp;
		<?php
		echo "<select>";
		for($i=2000; $i<=2024; $i=$i+1)
			echo "<option value=". $i .">" . $i . "</option>";
		echo "</select>"; 
		?>
	</div>
	<br>
</p>
<hr>

<h4 class="result"><u>Results</u></h4>
	<p style="margin-left:5.8%">
	Anything Enterprises<br>
	Seattle
	</p>
	<table style="width:63%; margin-left:5.8%">
		<tr>
			<td>Scope 1 Stationary - Natural Gas</td>
			<td>2014</td>
			<td>2014</td>
			<td>Reduction</td>
			<td>% Change</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>Activity data</td>
			<td style="color:#00B8E6">0 GJoules</td>
			<td style="color:#00B8E6">0 GJoules</td>
			<td style="color:#00B8E6">0 GJoules</td>
			<td style="color:#00B8E6">0%</td>
		</tr>
		<tr>
			<td>Energy</td>
			<td style="color:#00B8E6">0 GJoules</td>
			<td style="color:#00B8E6">0 GJoules</td>
			<td style="color:#00B8E6">0 GJoules</td>
			<td style="color:#00B8E6">0%</td>
		</tr>
		<tr>
			<td>Emission</td>
			<td style="color:#00B8E6">0 kgs</td>
			<td style="color:#00B8E6">0 kgs</td>
			<td style="color:#00B8E6">0 kgs</td>
			<td style="color:#00B8E6">0 %</td>
		</tr>
		<tr>
			<td>Annual cost (if entered)</td>
			<td style="color:#00B8E6">$0</td>
			<td style="color:#00B8E6">$0</td>
			<td style="color:#00B8E6">$0</td>
			<td style="color:#00B8E6">0 %</td>
		</tr>
	</table>
<a href="#" class="btn btn-primary" role="button" style="float:right; margin:70px; margin-right:41%">Export</a>
</body>
</html>