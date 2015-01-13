

<!-- Delete past this point -->
<!DOCTYPE html>

<html>
	<head>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">  
	    <link href="css/bootstrap.min.css" rel="stylesheet">  
	    <link href="css/getStarted.css" rel="stylesheet"> 
	    <link href="css/bootstrap-select.css" rel="stylesheet">
	    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap-select.js"></script>
	</head>
	<body>
<!--  Delete up to this point -->
		<div class = "tabbable">
			<ul class = "nav nav-tabs">
				<li class = "active"><a href = "#corporate">Corporate</a></li>
				<li><a href = "#business-units">Business Units</a></li>
				<li><a href = "#emission-sources">Emission Sources</a></li>
				<li><a href = "#access">Access</a></li>
			</ul>
			<div class = "tab-content">
				<div id = "corporate" class = "GS-page tab-pane active">
					<div class = "top-tooltip">
						<p>Set up your corporate profile</p>
					</div>
					<div class = "middle">
						<form method = "POST" id = "corporate-form" class = "clearfix">
							<div class = "half left">
								<h4>General Information <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "corp-name">Corporate Name</label></td>
										<td><input type = "text" id = "corp-name" class = "required"/></td>
									</tr>
									<tr>
										<td><label for = "trade-name">Trade Name</label></td>
										<td><input type = "text" id = "trade-name" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "addr1">Address 1</label></td>
										<td><input type = "text" id = "addr1" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "addr2">Address 2</label></td>
										<td><input type = "text" id = "addr2" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "city">City</label></td>
										<td><input type = "text" id = "city" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "corpSelCountry">Country</label></td>
										<td>
											<select id = "corpSelCountry" class = "required selCountry">
												<option value = "0" selected = "selected">N/A</option>
												<option value = "1">CANADA</option>
												<option value = "2">USA</option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for = "corpSelStateProv">State/Province</label></td>
										<td>
											<select id = "corpSelStateProv" class = "required selStateProv">
												<option value = "0" selected = "selected">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for = "zip-post">Zip/Postal Code</label></td>
										<td><input type = "text" id = "zip-post" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "weburl">Website URL</label></td>
										<td><input type = "text" id = "weburl" class = ""/></td>
									</tr>
								</table>
								
								<h4>Emission Reduction Target <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "baseYear">Base Year</label></td>
										<td>
											<select id = "baseYear">
												<?php
													for($i = 2000; $i <= 2024; $i++){
														echo '<option value = "'.$i.'">'.$i.'</option>';
													}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for = "weburl">Website URL</label></td>
										<td><input type = "text" id = "weburl" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "targetYear">Target Year</label></td>
										<td>
											<select id = "targetYear">
												<?php
													for($i = 2000; $i <= 2024; $i++){
														echo '<option value = "'.$i.'">'.$i.'</option>';
													}
												?>
											</select>
										</td>
									</tr>
								</table>
							</div>
							
							<div class = "half left">
								<h4>GHG Champion <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "champname">Name</label></td>
										<td><input type = "text" id = "champname" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "champtitle">Title</label></td>
										<td><input type = "text" id = "champtitle" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "champtelnum">Phone Number</label></td>
										<td><input type = "tel" id = "champtelnum" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "champemail">Email</label></td>
										<td><input type = "email" id = "champemail" class = ""/></td>
									</tr>
								</table>
								
								<h4>GHG Accoutant <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "accountname">Name</label></td>
										<td><input type = "text" id = "accountname" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "accounttitle">Title</label></td>
										<td><input type = "text" id = "accounttitle" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "accounttelnum">Phone Number</label></td>
										<td><input type = "tel" id = "accounttelnum" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "accountemail">Email</label></td>
										<td><input type = "email" id = "accountemail" class = ""/></td>
									</tr>
								</table>
								
								<h4>Reporting Year <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "yearEnd">Year End</label></td>
										<td><input type = "date" id = "yearEnd"/></td>
									</tr>
								</table>
							</div>
							
							<div class = "form-controls left clearfix">
								<button type = "submit">Save</button>
							</div>
						</form>
					</div>
		
					<script>
				        var options = [
				            {},
				            {
				                "Alberta": "AB",
				                "British Columbia": "BC",
				                "Manitoba": "MN",
				                "New Brunswick": "NB",
				                "Newfoundland/Labrador": "NFLL",
				                "Northwest Terriroties": "NWT",
				                "Nova Scotia": "NS",
				                "Nunavut": "NV",
				                "Ontario": "ON",
				                "Prince Edward Island": "PEI",
				                "Quebec": "QB",
				                "Saskatchewan": "SK",
				                "Yukon": "YK"
				            },
				            {
				                "Alabama": "Alabama",
				                "Alaska": "Alaska",
				                "Arizona": "Arizona",
				                "Arkansas": "Arkansas",
				                "California": "California",
				                "Colorado": "Colorado",
				                "Connecticut": "Connecticut",
				                "Delaware": "Delaware",
				                "District of Columbia": "District of Columbia",
				                "Florida": "Florida",
				                "Georgia": "Georgia",
				                "Hawaii": "Hawaii",
				                "Idaho": "Idaho",
				                "Illinois": "Illinois",
				                "Indiana": "Indiana",
				                "Iowa": "Iowa",
				                "Kansas": "Kansas",
				                "Kentucky": "Kentucky",
				                "Lousiana": "Lousiana",
				                "Maine": "Maine",
				                "Maryland": "Maryland",
				                "Massachusetts": "Massachusetts",
				                "Michigan": "Michigan",
				                "Minnesota": "Minessota",
				                "Mississippi": "Mississippi",
				                "Missouri": "Missouri",
				                "Montana": "Montana",
				                "Nebraska": "Nebraska",
				                "Nevada": "Nevada",
				                "New Hampshire": "New Hampshire",
				                "New Jersey": "New Jersey",
				                "New Mexico": "New Mexico",
				                "New York": "New York",
				                "North Carolina": "North Carolina",
				                "North Dakota": "North Dakota",
				                "Ohio": "Ohio",
				                "Oklahoma": "Oklahoma",
				                "Oregon": "Oregon",
				                "Pennsylvania": "Pennsylvania",
				                "Rhode Island": "Rhode Island",
				                "South Carolina": "South Carolina",
				                "South Dakota": "South Dakota",
				                "Tennessee": "Tennessee",
				                "Texas": "Texas",
				                "Utah": "Utah",
				                "Vermont": "Vermont",
				                "Virginia": "Virginia",
				                "Washington": "Washington",
				                "West Virgina": "West Virginia",
				                "Wisconsin": "Wisconsin",
				                "Wyoming": "Wyoming"
				            }
				        ];
				
				        $(document).ready(function () {
				
				            $(".selCountry").change(function () {
				                var val = $(this).val();
				                var newOptions;
				
				                if (val == 0) {
				                    $('.selStateProv option:gt(0)').remove();
				                    $('.selGeoLoc option:gt(0)').remove();
				                } else {
				                    newOptions = options[val];
				                    $('.selStateProv option:gt(0)').remove();
				                    $('.selGeoLoc option:gt(0)').remove();
				                    
				                    var $el = $(".selStateProv");
				                    $.each(newOptions, function (key, value) {
				                        $el.append($("<option></option>")
				                            .attr("value", value).text(key));
				                    });
				                    
				                    $el = $(".selGeoLoc");
				                    $.each(newOptions, function (key, value) {
				                        $el.append($("<option></option>")
				                            .attr("value", value).text(key));
				                    });
				                }
				            });
				
				        });
					</script>
				</div>
				<div id = "business-units" class = "tab-pane GS-page">
					<div class = "top-tooltip clearfix">
						<div class = "third left">
							<p>Set up the business units that will be part of your inventory <img src = "img/help.png" class = "help-icon"></p>
						</div>	
						<div class = "third left">
							<button type = "submit" id = "createBU">Create a new business unit</button>
							<img src = "img/help.png" class = "help-icon">
						</div>
						<div class = "third left">
							<select id = "selBU">
								<option value = "0">Edit an existing business unit</option>
							</select>
							<img src = "img/help.png" class = "help-icon">
						</div>	
					</div>
					<div class = "middle">
						<form method = "POST" id = "BU-form" class = "clearfix">
							<div class = "half left">
								<h4>General Information <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "BU-name">Business Unit Name</label></td>
										<td><input type = "text" id = "BU-name" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "BU-addr1">Address 1</label></td>
										<td><input type = "text" id = "BU-addr1" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "BU-addr2">Address 2</label></td>
										<td><input type = "text" id = "BU-addr2" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "BU-city">City</label></td>
										<td><input type = "text" id = "BU-city" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "buSelCountry">Country</label></td>
										<td>
											<select id = "buSelCountry" class = "required selCountry">
												<option value = "0" selected = "selected">N/A</option>
												<option value = "1">CANADA</option>
												<option value = "2">USA</option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for = "buSelStateProv">State/Province</label></td>
										<td>
											<select id = "buSelStateProv" class = "required selStateProv">
												<option value = "0" selected = "selected">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for = "BU-zip-post">Zip/Postal Code</label></td>
										<td><input type = "text" id = "BU-zip-post" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "geoLoc">Geographic Location</label></td>
										<td>
											<select id = "geoloc" class = "required selGeoLoc">
												<option value = "0" selected = "selected">N/A</option>
											</select>
										</td>
									</tr>
								</table>
							</div>
							<div class = "half left">
								<h4>Industry Group <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "indCode">Industry Code</label></td>
										<td><input type = "text" id = "indCode" class = ""/></td>
										<td><a href = "http://www.statcan.gc.ca/subjects-sujets/standard-norme/naics-scian/2007/list-liste-eng.htm">NAICS Canada</a></td>
									</tr>
								</table>
								
								<h4>Emission Reduction Target <img src = "img/help.png" class = "help-icon"></h4>
								<table>
									<tr>
										<td><label for = "BU-baseYear">Base Year</label></td>
										<td>
											<select id = "BU-baseYear">
												<?php
													for($i = 2000; $i <= 2024; $i++){
														echo '<option value = "'.$i.'">'.$i.'</option>';
													}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for = "redTarget">Reduction Target (%)</label></td>
										<td><input type = "text" id = "redTarget" class = ""/></td>
									</tr>
									<tr>
										<td><label for = "BU-targetYear">Target Year</label></td>
										<td>
											<select id = "BU-targetYear">
												<?php
													for($i = 2000; $i <= 2024; $i++){
														echo '<option value = "'.$i.'">'.$i.'</option>';
													}
												?>
											</select>
										</td>
									</tr>
								</table>
							</div>
							<div class = "full left">
								<h4>Comparative Metrics <img src = "img/help.png" class = "help-icon"></h4>
								<table class = "table table-bordered table-striped table-condensed">
									<thead>
										<th>Year</th><th>Revenue or Sales ($)</th><th>Customers or Guests</th><th>Employees (FTEs)</th><th>Floor Area (Sq Ft)</th><th><input type = "text" id = "metric1"></th><th><input type = "text" id = "metric2"></th><th><input type = "text" id = "metric3" /></th>
									</thead>
									<tr>
										<td>2012</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
									</tr>
									<tr>
										<td>2013</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
									</tr>
									<tr>
										<td>2014</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
									</tr>
								</table>
							</div>
							<div class = "form-controls left clearfix">
								<button type = "submit" value = "save">Save</button>
								<button type = "submit" value = "delete">Delete</button>
							</div>
						</form>
					</div>
				</div>
				<div id = "emission-sources" class = "tab-pane GS-page">
		
				</div>
				<div id = "access" class = "tab-pane GS-page">
		
				</div>
			</div>
		</div>
<!-- Delete past this line -->
	</body>
	
	<script>
		$('ul.nav-tabs a').on('click', function(e){
			e.preventDefault();
			
			$(this).tab('show');
		});
	</script>
</html>