<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title> SWAG </title>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/pamcss.css" rel="stylesheet">  
</head>
<body>
	<p>
		<div id ="calc1" style="margin-left:1%;float:left; width: 35.5%">
			<font color="#AFD464">Explore the benefits and costs of</font>
			<img src="img/help.png" style="width:3.5%">
			&nbsp;&nbsp;&nbsp;1.<select style="margin-left:0.5%">
			<option value="sea">Seattle</option>
			<option value="van">Vancouver</option>
			</select>
			<img src="img/help.png" style="width:3.7%">
		</div>

		<div id ="calc2" style="margin-left:2%;float:left; width: 22%">
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
			<img src="img/help.png" style="width:5.5%">
		</div><br>
		<font color="#AFD464" style="margin-left:11px">greenhouse gas reduction investments</font>

	</p>
	<hr style="margin-top:0%">

	<div id="table1" style="width:100%">
		<div style="width:40%; float:left">
				<h4><u>Current Situation</u>
				<img src="img/help.png" style="width:3.6%"></h4>
				<table style="width:82%; float:left">
					<tr>
						<td>Activity data</td>
						<td style="color:#00B8E6">0	GJoules</td>
					</tr>
					<tr>
						<td>Energy</td>
						<td style="color:#00B8E6">0	GJoules</td>
					</tr>
					<tr>
						<td>Emissions</td>
						<td style="color:#00B8E6">0	Tonnes</td>
					</tr>
					<tr>
						<td>Annual cost (if entered)</td>
						<td style="color:#00B8E6">$0</td>
					</tr>
					<tr>
						<td>Cost per unit of activity (if entered)</td>
					</table>
		</div>
		<div style="width:60%; float:left">
					<h4 style="float:left"><u>What If?</u>
					<img src="img/help.png" style="width:2.6%"></h4>
					<table style="width:70%; float:left">
						<tr>
							<td>Annual activity data reduced by</td>
							<td><input type="1" style="width:100px"> %</td>
						</tr>
						<tr>
							<td>Cost per unit of activity ($)</td>
							<td><input type="1" style="width:100px"></td>
						</tr>
						<tr>
							<td>Capital cost to make change ($)</td>
							<td><input type="1" style="width:100px"></td>
						</tr>
						<tr>
							<td>Carbon cost ($ per tonnes CO2e)</td>
							<td><input type="1" style="width:100px" placeholder="0"></td>
						</tr>
						<tr>
							<td>Time period to amortize (Years)</td>
							<td><input type="1" style="width:100px" placeholder="1"></td>
						</tr>
						<tr>
							<td>Interest rate (%)</td>
							<td><input type="1" style="width:100px"></td>
						</tr>
					</table>
		</div>
	</div>

	<h4><u>Results</u></h4>
	<div id="table2" style="width:100%">
		<table style="width:19%; float:left">
			<th><b>Energy Saved (GJoules) <img src="img/help.png" style="width:7.2%"></b></th>
			<tr>
				<td>Annually</td>
				<td style="color:#00B8E6">0</td>
			</tr>
			<tr>
				<td>Total period</td>
				<td style="color:#00B8E6">0</td>
			</tr>
			<tr>
				<td>Energy saved per $ investment</td>
				<td style="color:#00B8E6">0</td>
			</tr>
		</table>

		<table style="width:18%; float:left">
			<th><b>Emissions Saved (Kgs) <img src="img/help.png" style="width:7.5%"></b></th>
			<tr>
				<td>Annually</td>
				<td style="color:#00B8E6">0</td>
			</tr>
			<tr>
				<td>Total period</td>
				<td style="color:#00B8E6">0</td>
			</tr>
			<tr>
				<td>Energy saved per $ investment</td>
				<td style="color:#00B8E6">0</td>
			</tr>
		</table>

		<table style="width:14%; float:left">
			<th><b>$ Saved <img src="img/help.png" style="width:10.5%"></b></th>
			<tr>
				<td>Annually</td>
				<td style="color:#00B8E6">$0</td>
			</tr>
			<tr>
				<td>Total period</td>
				<td style="color:#00B8E6">$0</td>
			</tr>
			<tr>
				<td>ROI</td>
				<td style="color:#00B8E6">0%</td>
			</tr>
		</table>

		<table style="width:25%; float:left">
			<th><b>$ Saved Including Carbon Cost <img src="img/help.png" style="width:5.5%"></b></th>
			<tr>
				<td>Annually</td>
				<td style="color:#00B8E6">$0</td>
			</tr>
			<tr>
				<td>Total period</td>
				<td style="color:#00B8E6">$0</td>
			</tr>
			<tr>
				<td>ROI</td>
				<td style="color:#00B8E6">0%</td>
			</tr>
		</table>
	</div>

</body>
</html>
