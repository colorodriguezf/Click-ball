{include file='templates/usoComun/header.tpl'}  

<div class="contenedor pointer"> 
    <span id="puntos"> </span>
    <span id="tiempo"> </span>
</div>
<div class="contenedor">

    <div id="player" onclick="audioClick.play();">  </div>

</div>
<input id="data-usuario" value={$nombre_usuario} hidden>
<div class="modalPuntos" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">GAME OVER!</h1>
      </div>
      <div class="modal-body">
        <form method="POST">
            <h3>{$nombre_usuario}</h3>
            <p>tu puntuacion fue de  <span id="puntosTotales"> </span></p>  
        <div class="modal-footer">
        <button id="btn-enviarPuntos" type="button" class="btn btn-primary">ACEPTAR</button>
      </div> 
        </form>
      </div>
  
    </div>
  </div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<script src="js/game.js"></script>
{include file='templates/usoComun/footer.tpl'}