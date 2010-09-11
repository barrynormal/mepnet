<?php function DoThisAndThat($a){
    
    } ?>

<?php 

function doMenu($c){


echo '
<a><div class="btn" style="background-color:'. $c. '" id= "writing">writing</div></a>
<a><div class="btn" style="background-color:'. $c. '" id= "code">code</div></a>
<a href="http://www.markpenfold.net/wordpress/"><div class="btn" style="background-color:'. $c. '" id= "blog">blog</div></a>
<a href="http://secretscribble.blogspot.com/"><div class="btn" style="background-color:'. $c. '"  id= "draw">drawing</div></a>
<a><div class="btn" style="background-color:'. $c. '" id= "about">about</div></a>'

;
}

function doDataMenu($c){

echo'
<div class="data" style="background-color:'. $c. '" id="writing_d">some of my work in print</div>
<div class="data" style="background-color:'. $c. '" id="code_d">a few half-finished hacks</div>
<div class="data" style="background-color:'. $c. '" id="blog_d">I take photos you know</div>
<div class="data" style="background-color:'. $c. '" id="drawing_d">and I draw too</div>
<div class="data" style="background-color:'. $c. '" id="about_d">a few words about your host</div>';
}

?>