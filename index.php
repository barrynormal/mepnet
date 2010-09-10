<?php
if(!isset($_COOKIE['markpenfold'])){
setcookie('markpenfold', 'first_visit', time()+(60*60*24*30));
}else
$remember_setup = remember_setup();
setcookie('markpenfold', $remember_setup, time()+(60*60*24*30));

function remember_setup(){
//set values for what is displayed and what is not in an array or string of booleans
return '1010';
}

include('weather.php');
include('menu.php');

$menucol = getWeather();
?>



<!DOCTYPE html PUBLIC "-//WC3//DTD XHTML 1.0 Strinct//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head><title> - Mark Penfold - </title>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jsmep.js"></script>
<script type="text/javascript" src="http://jqueryui.com/latest/jquery-1.3.2.js"></script>
<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/1.8rc1/jquery-1.4.1.js"></script>
<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/1.8rc1/ui/jquery-ui.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="STYLESHEET" type="text/css" href="w.css"/>

</head>
<body>


</body>
</html>
