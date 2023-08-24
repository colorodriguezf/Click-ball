"use strict"
let btn_jguar =document.getElementById("btn-jugar");
btn_jguar.addEventListener("click",jugar);
document.getElementById("player").addEventListener("click", sumarPuntos);
let puntos = 0;
let tiempo= 60;
const puntuacion = document.getElementById("puntos");
const puntosTotales = document.getElementById("puntosTotales");
const audioClick = new Audio();
audioClick.src= "/sound-effects/ES_Bubble Blip 2 - SFX Producer.mp3";
const body = document.body;

const contenedor = document.querySelector('.contenedor');
let ancho="";
let alto = ""; 
document.getElementById("player").style.display="none";

function sumarPuntos() {
    puntos++;
    puntuacion.innerHTML="Puntos: <b> "+puntos+ "</b>";
    puntosTotales.innerHTML=puntos;
    let colores =['#4357AD','#48a9a6','#c1666b','#8eecf5','#e63946','#03071e','#560bad','#ff0054', '#ff35c2','#e4fff9','#f4ff91',
                '#BDC3C7', '#5499C7', '#9C640C'];
    let colorRandom = Math.round(Math.random()*colores.length);
    let randomColor= colores[colorRandom];
  
    let random1 = Math.round(Math.random()*ancho);
    let random2 = Math.round(Math.random()*alto);

    document.getElementById("player").style.marginLeft =random1 + "px";
    document.getElementById("player").style.marginTop =random2 + "px";
    let a=document.getElementById("player").style.backgroundColor=randomColor;
}

let interval = "";
function jugar() {
     ancho = contenedor.clientWidth - 20;
     alto = contenedor.clientHeight; 
    document.getElementById("player").style.display="flex";
    puntosTotales.innerHTML = 0;
    puntuacion.innerHTML = "Puntos:"+ 0;
    puntos = 0;
    tiempo = 60;
    restarTiempo();
    interval = setInterval(restarTiempo,1000);
}

function restarTiempo() {
    if(tiempo > 0) {
        tiempo--;
    }
    document.getElementById("tiempo").innerHTML="Tiempo: "+tiempo;
    if (tiempo == 0) {
        clearInterval(interval);
        document.getElementById("player").style.display="none";
        document.getElementById("modalPuntos").style.display="flex";
        btn_jguar.disabled = true;
    }

}

// const restartBoton = document.getElementById("restart");

// restartBoton.addEventListener("click", () => {
//   jugar();
// });

const btnModal = document.getElementById('btn-modal');
const modal = document.getElementById('modalPuntos');

btnModal.addEventListener('click', closeModal);

function closeModal() {
    modal.style.display = 'none';
    btn_jguar.disabled = false;
}

