<html>
<head>
<title></title>
    <link href="css/bootstrap-responsive.css" rel="stylesheet"> 
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>   
</head>
<body>
<div class="container">
<div class="tabbable boxed parentTabs">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#welcome">Welcome</a></li>
        <li><a href="#getstarted">Get Started</a></li>
        <li><a href="#measure">Measure</a></li>
        <li><a href="#report">Report</a></li>
        <li><a href="#reduce">Reduce</a></li>
        <li><a href="#offset">Offset</a></li>
        <a href="Main"><img src="img/logo.gif"style="margin-top: 1.2%; float:right; width: 7%"></a>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="welcome">
            <?php include('welcome.html');?>
        </div>
        <div class="tab-pane" id="getstarted">
            Get started
        </div>
        <div class="tab-pane" id="measure">
            <?php include('Measure.html');?>
        </div>
        <div class="tab-pane" id="report">
            <?php include('Report.html');?>      
        </div>
        <div class="tab-pane" id="reduce">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#check">Reduction Checklist</a></li>
                    <li><a href="#calc">Reduction Calculator</a></li>
                    <li><a href="#whatif">What-If Tool</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="check">
                        <?php include('reductionchecklist.html');?>      
                    </div>
                    <div class="tab-pane" id="calc">
                        <?php include('reductioncalculator.php');?>
                    </div>
                    <div class="tab-pane" id="whatif">
                        <?php include('whatiftool.php');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="offset">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#carboffsets">Carbon Offsets</a></li>
                    <li><a href="#carbneutral">Go Carbon Neutral</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="carboffsets">
                        <?php include('carboffset.php');?>
                    </div>
                    <div class="tab-pane" id="carbneutral">
                        <?php include('cabonneutral.php');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $("ul.nav-tabs a").click(function (e) {
      e.preventDefault();  
        $(this).tab('show');
    });
    </script>
</body>
</html>