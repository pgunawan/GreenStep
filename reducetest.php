<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Dynamic Tabs</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
    $("#myTab a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
});
</script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#check">Reduction Checklist</a></li>
        <li><a href="#calc">Reduction Calculator</a></li>
        <li><a href="#what">What-If Tool</a></li>
    </ul>
    <div class="tab-content">
        <div id="check" class="tab-pane active">
            <?php include('reductionchecklist.html');?>
        </div>
        <div id="calc" class="tab-pane">
            <?php include('reductioncalculator.php');?>
        </div>
        <div id="what" class="tab-pane">
           <?php include('whatiftool.php');?>
        </div>
    </div>
</div>
</body>
</html>                                		