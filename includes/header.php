<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FundsMaster Console</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="extlib/jquery/js/jquery-1.6.2.min.js"></script>
    <script src="extlib/jquery/js/jquery-ui-1.8.15.custom.min.js"></script>
    <script src="js/functions.js"></script>
    <link rel="stylesheet" href="stylesheets/stylesheet.css" />
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
