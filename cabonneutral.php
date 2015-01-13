<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/pamcss.css" rel="stylesheet">
</head>
<body>
    <p>
        <div id ="calc1" style="margin-left:1%;float:left; width:33.7%">
            <font color="#AFD464" style="margin-right:31px">Calculate the cost of
            <img src="img/help.png" style="width:3.8%"></font>
            1. <select style="margin-left:0.5%" id="sol">
            <option>Select organization level</option>
            <option>All</option>
            <option>Seattle</option>
            <option>Vancouver</option>
            </select>
            <img src="img/help.png" style="width:3.8%">
        </div>

        <div id ="calc2" style="margin-left:2%;float:left; width: 10%">
            3. <?php
            echo "<select><option>Year</option>";
            for($i=2000; $i<=2024; $i=$i+1)
                echo "<option value=". $i .">" . $i . "</option>";
            echo "</select>"; 
            ?>
            <img src="img/help.png" class="image" style="width:13%">
        </div>

        <div id="calctable" style="width:90%">
        <table style="width:30%; float:right">
            <tr>
                <td><center>Calculated emissions</center></td>
                <td><center>Cost to Offset</center></td>
            </tr>
            <tr>
                <td style="color:#00B8E6"><b><center>0.0 Tonnes</center></b></td>
                <td style="color:#00B8E6"><b><center>$0</center></b></td>
        </table>
        </div>
<br>
        <div id ="calc2" style="margin-left:1%;float:left; width:33.8%">
        <font color="#AFD464" style="margin-right:15px">purchasing carbon offsets</font>
            2. <select style="margin-left:0.5%" class="dd3" id="source">
            <option>Select emissions sources</option>
            <option>Vancouver</option>
            <option>Seattle</option>
            </select>
            <img src="img/help.png" class="image" style="width:3.8%">    
        </div>

        <div id ="calc2" style="margin-left:2%;float:left; width: 20%">
            4. <?php
            echo "<select><option>Select a carbon cost</option>";
            for($i=5; $i<=50; $i=$i+1)
                echo "<option value=". $i .">" . "$" . $i . "</option>";
            echo "</select>"; 
            ?>
            <img src="img/help.png" class="image" style="width:8%">
        </div>


</p>
    <hr style="margin-top:3%">
    <p>Your organization may wish to become fully carbon neutral by purchasing offsets to counteract all your emissions. The commitement to become carbon neutral can pay off. Carbon neutral companies often are able to increase market share and revenue by attracting environmentally conscious consumers and leveraging government customer segments. Additional benefits can include enhanced customer loyality, staff recruitment and retention, brand value and leadership.</p>
    <p><a href="mailto:info@ecobase.net">Contact us</a> to find out more about how your business can achieve carbon neutrality.</p>

    
</body>
</html>