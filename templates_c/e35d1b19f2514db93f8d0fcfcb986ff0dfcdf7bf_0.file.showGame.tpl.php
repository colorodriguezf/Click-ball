<?php
/* Smarty version 3.1.39, created on 2022-01-26 20:28:59
  from 'C:\xampp\htdocs\Click-ball\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f1a0fbb5e8e2_58081836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35d1b19f2514db93f8d0fcfcb986ff0dfcdf7bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Click-ball\\templates\\showGame.tpl',
      1 => 1643225337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_61f1a0fbb5e8e2_58081836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="contenedor pointer"> 
    <span id="puntos"> </span>
    <span id="tiempo"> </span>
</div>
<div class="contenedor">

    <div id="player" onclick="audioClick.play();">  </div>

</div>



<audio  controls>
<source src="sound-effects/pacman-dies.mp3" type="audio/mpeg">NO</audio>

<?php echo '<script'; ?>
 src="js/game.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
