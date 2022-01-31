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
            <div id="registrate"><p>¿COMO SE JUEGA?</p></div>
            
            <div id="comoJugar"><p>RANKING 🏆</p></div>
            <div id="ranking" > <a href="logout"><p>SALIR</p> </a></div>
            <div id="right"></div>
            <div id="left"></div>
        </div>
</div>

{include file="templates/usoComun/footer.tpl"}