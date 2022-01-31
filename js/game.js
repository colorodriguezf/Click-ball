"use strict"
document.addEventListener("DOMContentLoaded",restarTiempo);
document.getElementById("player").addEventListener("click", sumarPuntos);
let puntos = 0;
let tiempo= 10;

const audioClick = new Audio();
audioClick.src= "sound-effects/ES_Bubble Blip 2 - SFX Producer.mp3";

function sumarPuntos() {
    puntos++;
    document.getElementById("puntos").innerHTML="Puntos: <b> "+puntos+ "</b>";
    document.getElementById("puntosTotales").innerHTML=puntos;
    
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
        // alert("GAME OVER, Tu punuacion fue de: " +puntos);
        tiempo = 0;
        clearInterval(interval);
        document.getElementById("player").style.display="none";
    }

}
// setInterVal -->mala practica
let interval = setInterval(restarTiempo,1000);


let API_URL= "api/puntaje";
document.getElementById("btn-enviarPuntos").addEventListener("click",enviarPuntos);

async function enviarPuntos() {
    let usuario_fk = document.getElementById("data-usuario").value;
    console.log(usuario_fk);
    console.log(puntos);

    let puntuacionNueva = {
        "usuario_fk":usuario_fk,
        "puntos":puntos
    }
    try {
        let response = await fetch(API_URL, { 
            "method": "POST",
            "headers": {"Content-Type": "application/json"},
            "body": JSON.stringify(puntuacionNueva)
        });
        if (response.ok) {
            console.log("Puntuacion de "+usuario_fk+ " añadida con exito");
        }
    }
    catch (e) {
        consol.log(e);
    }
}