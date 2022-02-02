<?php
/* Smarty version 3.1.39, created on 2022-02-02 16:25:47
  from 'C:\xampp\htdocs\Click-ball\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61faa27bd75832_59970962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35d1b19f2514db93f8d0fcfcb986ff0dfcdf7bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Click-ball\\templates\\showGame.tpl',
      1 => 1643815546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_61faa27bd75832_59970962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

<div class="botonesGame"> 
      <a href="play"><button>    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                </svg></button></a>
     <a href="home"> <button>    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg></button></a>
</div>
<div class="contenedor pointer"> 
    <span id="puntos"> </span>
    <span id="tiempo"> </span>
</div>
<div class="contenedor">

    <div id="player" onclick="audioClick.play();">  </div>
    

    
</div>
<input id="data-usuario" value=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 hidden>
<div id="modalPuntos" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-headerGame">
        <h1 class="modal-title gameOver">GAME OVER!</h1>
      </div>
      <div class="modal-body">
        <form method="POST">
            <h3><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</h3>
            <p>tu puntuacion fue de  <span id="puntosTotales"> </span> puntos</p>  
        <div class="modal-footerGame">
        <button id="btn-enviarPuntos" type="button" class="btn btn-primary">ACEPTAR</button>
      </div> 
        </form>
      </div>
  
    </div>
  </div>
</div>

    
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 src="js/game.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
