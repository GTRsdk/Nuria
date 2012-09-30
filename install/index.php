<?php
/*
 * Project: Nuria
 * File: install/index.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
$page = 'index';
if (isset($_GET['step'])) {
    switch ($_GET['step']) {
        case 1: $page = 'db'; break;
        case 2: $page = 'url'; break;
        case 3: $page = 'htaccess'; break;
        case 4: $page = 'server'; break;
        case 5: $page = 'sql'; break;
        case 6: $page = 'finish'; break;
        default: $page = 'index'; break;
    }
}
if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 1: $error = 'Can\'t create database file, try with CHMOD 777 to install folder'; break;
        case 2: $error = 'Can\'t create config file, try with CHMOD 777 to install folder'; break;
        case 3: $error = 'Can\'t create htaccess file, try with CHMOD 777 to install folder'; break;
        case 4: $error = 'Can\'t create server file, try with CHMOD 777 to install folder'; break;
        case 5: $error = 'Can\'t import the database, check database user, password and host'; break;
        case 6: $error = 'Can\'t rename the files, try with CHMOD 777 to install folder'; break;
        default: $error = 'Unknown error ocurred'; break;
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <meta name="Author" content="Ink2Inv">
    <meta name="Description" content="Install Nuria">
    <title>Nuria install</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="design/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <!-- <div class="products"></div> -->
    <div id="headback">
        <a href="index.php"><div id="headlogo"></div></a>
        <div id="main">
            <div id="wrapper">
                <div id="links">
                    <a href="#" id="index" title="Disclamer">Disclamer</a>
                    <a href="#" id="install" title="Start Install">Start Install</a>
                    <a href="#" id="credits" title="Credits">Credits</a>
                    <!-- <a href="#" id="rules" title="None">None</a> -->
                    <a href="https://github.com/NewOpportunity/Nuria" target="_blank" title="By New Opportunity">Nuria Project</a>
                </div>
            </div>
            <?php if (isset($error)) { echo '<br><br><strong>'.$error.'</strong>'; } ?>
            <div id="text">
            
            </div>
            <br>
        </div>
        <div id="footer">Powered by <a href="https://github.com/NewOpportunity/Nuria">Nuria - New Opportunity's project</a></div>
        <div id="footer2"><a href="http://spazze.net">Ink2Inv</a> © 2012<br><br></div>
    </div>
    <div id="fuzz">
        <div class="loadbox">
            <img src="design/ajax-loader.gif">
        </div>
    </div>
    </body>
</html>
<script>
    $(document).ready(function(){
    	$("#fuzz").css("height", $(document).height());
    	$("#fuzz").fadeIn();
    	$('#text').load('templates/<?=$page;?>.php',function(){$("#fuzz").fadeOut()});
    	$("#index").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/index.php',function(){$("#fuzz").fadeOut()});
    	});
    	$("#install").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/db.php',function(){$("#fuzz").fadeOut()});
    	});
    	$("#credits").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/credits.php',function(){$("#fuzz").fadeOut()});
    	});
        /*$("#rules").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/rules.php',function(){$("#fuzz").fadeOut()});
    	});*/
    	$(window).bind("resize", function(){
            $("#fuzz").css("height", $(window).height());
    	});
    	$(window).bind("scroll", function(){
            $("#fuzz").css("height", $(window).height());
    	});
    	$(window).scroll(function () {
    		$("#fuzz").css("height", $(window).height());
    	});
    });
</script>