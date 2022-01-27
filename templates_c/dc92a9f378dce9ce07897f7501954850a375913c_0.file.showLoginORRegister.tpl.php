<?php
/* Smarty version 3.1.39, created on 2022-01-27 16:15:10
  from 'C:\xampp\htdocs\Click-ball\templates\showLoginORRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f2b6fe23f238_24361761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc92a9f378dce9ce07897f7501954850a375913c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Click-ball\\templates\\showLoginORRegister.tpl',
      1 => 1643296507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_61f2b6fe23f238_24361761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="fondoLoginOrRegister">
    <div id="allthethings">
    <div id="left"></div>
        <div id="single" type="button" data-toggle="modal" data-target="#modalLogin"><p>INICIAR SESION</p></div>
                   <!-- Modal Login -->
                   <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                   <div class="modal-dialog xl" role="document">
                       <div class="modal-content">
                           <div class="modal-body">
                            <div class="containerModal">
                                <form  class="userycontraseña" action="verify" method="POST">
                                                                                    <div class="usuario">
                                                <h2>Usuario:</h2>
                                                <input type="text" name="usuario">
                                            </div>
                                            <div class="contraseña">
                                                <h2>Contraseña:</h2>
                                                <input type="password" name="password">
                                            </div>
                                        <button class=iniciarSesion>Iniciar sesion </button>
                                </form>
                            </div>
                           </div>
                       </div>
                   </div>
               </div>
    <div id="registrate" type="button" data-toggle="modal" data-target="#modalRegister"><p>REGISTRATE</p></div>
     <!-- Modal Register -->
     <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog xl" role="document">
         <div class="modal-content">
             <div class="modal-body">
              <div class="containerModal">
        <form class="formRegistro" action="login" method="POST" enctype="multipart/form-data">
              <div class="mail">
                  <input type="text" placeholder="Correo electronico" name="correo" required>
              </div>
              <div class="usuario">
                  <input type="text" placeholder="Nombre de usuario" name="nombre_usuario" required>
              </div>
              <div class="nickname">
                  <input type="text" placeholder="Apodo" name="nickname" required>
              </div>
              <div class="pass">
                  <input type="password" placeholder="Contraseña" name="password" required>
              </div>
              <div class="foto_perfil">
                  <input type="file" name="input_name" id="imageToUpload" name="foto_perfil" required>
              </div>
              <button type="submit"class=iniciarSesion>Registrarme </button>
      </form>
              </div>
             </div>
         </div>
     </div>
 </div>
    <div id="comoJugar"><p>¿COMO SE JUEGA?</p></div>
    <div id="ranking"><p>RANKING 🏆</p></div>
    <div id="right"></div>
    <div id="left"></div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
