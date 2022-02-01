{include file='templates/usoComun/header.tpl'}
<div class="fondoLoginOrRegister">

    <div class="bola"></div>
    
    {include file='templates/usoComun/logo.tpl'}
        <div id="allthethings">
            <div id="single" type="button" data-toggle="modal" data-target="#modalLogin"><p>INICIAR SESION</p></div>
                    <!-- Modal Login -->
                    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog xl" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="containerModal">
                                    <form  class="userycontraseña" action="verify" method="POST">
                                    {* <h5 class="alert-danger errorLogin">{$error}</h5> *}
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
    {* {if $nombre_usuario && $foto_perfil}
        <div id="registrate"><p>{$nombre_usuario}</p></div>
    {/if} *}
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
              <button type="submit"class="iniciarSesion">Registrarme </button>
      </form>
              </div>
             </div>
         </div>
     </div>
 </div>
    <div id="comoJugar" type="button" data-toggle="modal" data-target="#modalComoJugar"><p>¿COMO SE JUEGA?</p></div>
           <!-- Modal COMO SE JUEGA ? -->
           <div class="modal fade" id="modalComoJugar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
           <div class="modal-dialog xl" role="document">
               <div class="modal-content">
                   <div class="modal-body">
                       <div class="containerModal">
                             <h1>¿Como se juega?</h1>
                              <p class="pReglas">El jugador tendra 60 segundos para clickear en la bola la mayor cantidad de veces que sea posible,
                              cada vez que se clickee la misma, esta se movera aleatoreamente dentro del rectangulo de juego.</p>        
                        </div>

                       </div>
                   </div>
               </div>
           </div>
    <div id="ranking" type="button" data-toggle="modal" data-target="#modalRanking"><p>RANKING 🏆</p></div>
    <!-- Modal RANKING -->
    <div class="modal fade" id="modalRanking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containerModal">
                      <h1>TOP 100👑</h1>
                       <table>
                            <thead>
                                <tr>
                                    <th>USUARIO</th>
                                    <th>PUNTOS</th>
                                </tr>
                            </thead>
                            <tbody>
                            {foreach from=$top100 item=$usuario}
                                <tr>
                                    <td class="topUsuario">{$usuario->usuario_fk}</td>
                                    <td class="topPuntos">{$usuario->puntos}</td>
                                <tr>
                            {/foreach}
                            </tbody>
                     </table>      
                 </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>

{include file="templates/usoComun/footer.tpl"}