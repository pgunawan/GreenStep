<html>
<head>
<title>EcoBase</title>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">  
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
      
</head>
<div class = "top-tooltip clearfix" style="float: left">
    <div class = "third left" style="float: left">
    
           <p> Set up the business units that will be part of your inventory</p>
    </div>  
<div class="bs-example tooltip-demo" style="float: left">
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
                The number of business units you can create depends on the version of <img src='img/ecobase.png'; style=&#34;width: 10%&#34;> you're 
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
<!--

<div class = "third left">
    <button type = "submit" id = "createBU">Create a new business unit</button>
</div>


<div class = "third left">
    <select id = "selBU">
        <option value = "0">Edit an existing business unit</option>
    </select>
    
    <div class="bs-example tooltip-demo">
        <div class="bs-example-tooltips">
            <button type="button" class="btn btn-default" style="border-color:white" data-container="body" data-toggle="popover"
                    data-placement="top" data-content=
                    "Enter your organization's name, address and website." data-original-title="" title="">
                    <span class="glyphicon glyphicon-question-sign"></span>
            </button>
        </div>
    </div>
</div>  

</div>
-->
<script>
$('[data-toggle="popover"]').popover();

    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
                                    //the 'is' for buttons that trigger popups
                                    //the 'has' for icons within a button that triggers a popup
                                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                                        $(this).popover('hide');
                                    }
                                });
    });
    $('.html').popover({ html : true });
</script>

</html>