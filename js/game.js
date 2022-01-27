"use strict"
document.addEventListener("DOMContentLoaded",restarTiempo);
document.getElementById("player").addEventListener("click", sumarPuntos);
let puntos = 0;
let tiempo= 3;

const audioClick = new Audio();
audioClick.src= "sound-effects/ES_Bubble Blip 2 - SFX Producer.mp3";

function sumarPuntos() {
    puntos++;
    document.getElementById("puntos").innerHTML="Puntos: <b> "+puntos+ "</b>";
    
    let random1 = Math.round(Math.random()*600);
    let random2 = Math.round(Math.random()*520);
    console.log(random1);
    console.log(random2);
    document.getElementById("player").style.marginLeft =random1 + "px";
    document.getElementById("player").style.marginTop =random2 + "px";
}


function restarTiempo() {
    tiempo--;
    document.getElementById("tiempo").innerHTML="Tiempo: "+tiempo;
    if (tiempo == 0) {
        alert("GAME OVER, Tu punuacion fue de: " +puntos);
        tiempo = 0;
        puntos =0;
        clearInterval(interval);
        document.getElementById("player").style.display="none";
    }

}
// setInterVal -->mala practica
let interval = setInterval(restarTiempo,1000);