<div class = "top-tooltip clearfix">
	<div class = "third left">
		<h4 style= "float: left">Set up the business units that will be part of your inventory</h4>
		
		<div class="bs-example tooltip-demo" style="float:left; margin-top:3%">
			<div class="bs-example-tooltips">
				<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" 
				data-content="
				Decide which of your business units will be part of your organization's greenhouse gas inventory. Business units are 
				all the separate companies, facilities or operations which are owned or controlled by your organization. Collectively, 
				these business units define the &#34;organizational boundary&#34; for your corporate greenhouse gas inventory.
				<br><b>Important: you must create at least one business unit.</b><br>You may wish to simply create a single business unit that 
				defines your entire organizational boundary, or your might want to create multiple business units so you can track and report
				emissions for each one separately.
				<br>
				The number of business units you can create depends on the version of <img src=&#34;img/ecobase.png&#34; style=&#34;width: 40%&#34;> you're 
				using: &nbsp;
				<ul>
					&nbsp;<li>Express - 1 business unit only</li>
					&nbsp;<li>Regular - up to 3 business units</li>
					&nbsp;<li>Premium - up to 5 business units</li>
				</ul>
				You can upgrade your version anytime. 	
				" data-html="true" data-original-title="" title="">
				<span class="glyphicon glyphicon-question-sign"></span>
			</button>
		</div>
	</div>
</div>	

<div class = "third left">
	<button type = "submit" id = "createBU">Create a new business unit</button>
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
			<h4>General Information</h4>
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
					<td><select id = "buSelCountry" class = "required selCountry">
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
		<h4>Industry Group <a href="#buIndustry"><img src = "img/help.png" class = "help-icon"></a>
			<table>
				<tr>
					<td><label for = "indCode">Industry Code</label></td>
					<td><input type = "text" id = "indCode" class = ""/></td>
					<td><a href = "http://www.statcan.gc.ca/subjects-sujets/standard-norme/naics-scian/2007/list-liste-eng.htm">NAICS Canada</a></td>
				</tr>
			</table>

			<h4>Emission Reduction Target </h4><a href="#buRedTarget"><img src = "img/help.png" class = "help-icon"></a>
			<table>
				<tr>
					<td><label for = "BU-baseYear">Base Year</label></td>
					<td>
						<select id = "BU-baseYear">
							<?php
							for($i = 2000; $i <= 2024; $i++)
							{
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
							for($i = 2000; $i <= 2024; $i++)
							{
								echo '<option value = "'.$i.'">'.$i.'</option>';
							}
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>

		<div class = "full left">
			<h4>Comparative Metrics </h4><a href="#buCoMet"><img src = "img/help.png" class = "help-icon"></a>
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