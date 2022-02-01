{include file='templates/usoComun/header.tpl'}
<div class="fondoLoginOrRegister">
    <nav>
        <div class="fotoNav"><img src="{$foto_perfil}"/></div>
        <div><p>{$nombre_usuario}</p></div>
    </nav>

    <div class="bola"></div>
    
    {include file='templates/usoComun/logo.tpl'}
        <div id="allthethings">
            <div id="left"></div>
               <div id="single"> <a href="play"><p>JUGAR</p></div></a>
            <div  id="registrate" type="button" data-toggle="modal" data-target="#modalComoJugar"><p>¿COMO SE JUEGA?</p></div>
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
            
            <div id="comoJugar" type="button" data-toggle="modal" data-target="#modalRanking"><p>RANKING 🏆</p></div>
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
            <div id="ranking" > <a href="logout"><p>SALIR</p> </a></div>
            <div id="right"></div>
            <div id="left"></div>
        </div>
</div>

{include file="templates/usoComun/footer.tpl"}