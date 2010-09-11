<?php

function getWeather(){
$value = array();
$return_colour;
$weather_types = array('#282932', '#282932', '#282932', '#474952', '#444e45', '#444e45','#444e45','#444e45','#444e45','#444e45','#444e45', '#494647', '#494647', '#494647', '#808b8e','#808b8e','#808b8e', '#11b529', '#1179b5', '#1179b5', '#1179b5', '#1179b5', '#6a7a6d', '#627474', '#627474', '#8c8a8c', '#8c8a8c', '#8c8a8c', '#8c8a8c', '#889692', '#3a423e', '#404048','#404048','#404048','#404048', '#404048','#404048','#9e9f9f','#9e9f9f', '#9e9f9f','#9e9f9f', '#607591');

$url = 'http://weather.yahooapis.com/forecastrss?w=21125&u=c';

    $dom = new DomDocument;
    $dom->load($url); 
    //print $dom->saveXML();  
    $t = $dom->getElementsByTagName("condition")->item(0);
    $temp = $t->getAttributeNode('code')->nodeValue;
    

            if($temp > sizeof($weather_types)){
              	         $return_colour = '#d52b2b';
              	         }else{
              	         $return_colour = $weather_types[$temp]; 
              	         }
              	         //echo "colour: " .$return_colour;
              	         return $return_colour;
              	         


}

getWeather();

/*'#444652', '#6d62bd', '#6d62bd', '#2f3139', '#00023a', '#59596a','#59596a','#59596a','#59596a','#59596a','#59596a', '#6d806d', '#6d806d', '#535e61', '#535e61','#535e61','#1193b7', '#539e5e', '#e13f33', '#6d806d', '#6d806d', '#6d806d', '#e13f33', '#656a6a', '#656a6a', '#656a6a', '#656a6a', '#656a6a', '#656a6a', '#6b5b84', '#6b5b84', '#3c3e6e','#3c3e6e','#3c3e6e','#3c3e6e', '#61909d','#61909d','#61909d','#644f61', '#4d325b','#a95f82', '#464162'*/
?>