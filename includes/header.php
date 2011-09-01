<!DOCTYPE html>
<html>
<head>
    <title>FundsMaster Console</title>
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <script type="text/javascript" src="extlib/jquery/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="extlib/jquery/js/jquery-ui-1.8.15.custom.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" />
    <script>
	    $(function() {
		    $( "#accordion" ).accordion({
                active: false,
                collapsable: true,
                event: 'click'
        });
	});
    </script>
</head>
<body>
    <div id="main">
        <div id="logo" style="float: left">
            <img src="images/logo.png" border="0">
        </div>
        <div id="title" style="float: right; background-color: #ffffff; padding-right: 250px; color: #00008b;">
            <p class="title">FundsMaster</p>
            <p>Made by a firefighter for firefighters.</p>
        </div>
        <div id="spacer" style="clear: both;"></div>
