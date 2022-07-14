<?php

/**
* Front Page Template File:
* Renders a Dynamic Front Page Template File
*
* @package Premise
*/

?>

<header>

    <!-- jQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <!-- Blotter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/blotter.min.js"></script>

    <!-- Loads Header -->
    <?php get_header(); ?>



<!-- Materials -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/channelSplitMaterial.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/fliesMaterial.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/liquidDistortMaterial.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/rollingDistortMaterial.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/slidingDoorMaterial.min.js"></script> -->

</header>

<main>

<body>
    <article>
<br>
<br>
<br>
    <h1><span>The things we make</span>
    <br>
    <span>should resonate.</span>
    </h1>

<script>


// Rules for showTime() [#clock]
function showTime(){

var date = new Date();

var h = date.getHours(); // 0-23
var m = date.getMinutes(); // 0-59
var s = date.getSeconds(); // 0-59

if(h == 0){
    h = 12;
}

if(h > 12){
    h = h - 12;
}

h = (h < 10) ? "0" + h : h;
m = (m < 10) ? "0" + m : m;
s = (s < 10) ? "0" + s : s;

var time = h + ":" + m + ":" + s;

document.getElementById("clock").innerText = time;
document.getElementById("clock").textContent = time;

return document.getElementById("clock").innerText = time;

}

function globalClock(){
var currentTime = showTime();


// 001 - Blotter: Text Constructor
var text = new Blotter.Text(`${currentTime}`, {
family : "'Rift', sans-serif",
size : 300,
fill : "#202020",
});


// 0012 - Blotter: Materials

var material = new Blotter.LiquidDistortMaterial();

// Material Params
material.uniforms.uSpeed.value = 0.1
material.uniforms.uVolatility.value = 0.2

var blotter = new Blotter(material, {
texts : text
});


// blotter.
var elem = document.getElementById("distortion-text");
var scope = blotter.forText(text);

text.needsUpdate = true;
material.needsUpdate = true;
blotter.needsUpdate = true;

scope.appendTo(elem); 

}

function liveTime(){
    setInterval(function(){ 
        globalClock();
    }, 1000);
}

liveTime();

// Calls Blotter Animation
globalClock();



</script>

        <?php get_template_part( 'template-parts/page/home' )?>

        <!-- <div id="clock"></div> -->
        
    </article>

    </body>

</main>

<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>