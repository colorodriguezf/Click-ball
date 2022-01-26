{include file='templates/usoComun/header.tpl'}

<div class="contenedor pointer"> 
    <span id="puntos"> </span>
    <span id="tiempo"> </span>
</div>
<div class="contenedor">

    <div id="player" onclick="audioClick.play();">  </div>

</div>



<audio  controls>
<source src="sound-effects/pacman-dies.mp3" type="audio/mpeg">NO</audio>

<script src="js/game.js"></script>
{include file='templates/usoComun/footer.tpl'}