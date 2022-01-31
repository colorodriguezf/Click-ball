<?php
/* Smarty version 3.1.39, created on 2022-01-31 21:19:49
  from 'C:\xampp\htdocs\Click-ball\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f84465326738_95808763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35d1b19f2514db93f8d0fcfcb986ff0dfcdf7bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Click-ball\\templates\\showGame.tpl',
      1 => 1643660379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_61f84465326738_95808763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

<div class="contenedor pointer"> 
    <span id="puntos"> </span>
    <span id="tiempo"> </span>
</div>
<div class="contenedor">

    <div id="player" onclick="audioClick.play();">  </div>

</div>
<input id="data-usuario" value=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 hidden>
<div class="modalPuntos" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">GAME OVER!</h1>
      </div>
      <div class="modal-body">
        <form method="POST">
            <h3><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</h3>
            <p>tu puntuacion fue de  <span id="puntosTotales"> </span></p>  
        <div class="modal-footer">
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
