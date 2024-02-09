const audio = document.getElementById('bg-music');
let icon = document.getElementById('audio-icon');

function playAudio(){
    if (audio.paused){
        audio.play();
        icon.src="/MecFluidos/imagenes/audio-icon.png";
    } else{
        audio.pause();
        icon.src="/MecFluidos/imagenes/no-audio-icon.png";
    }
}