
  if ('speechSynthesis' in window) {
    const playEle = document.querySelector('#play');
    const pauseEle = document.querySelector('#pause');
    const stopEle = document.querySelector('#stop');
      
    var synth = speechSynthesis;
      
    playEle.addEventListener('click', onClickPlay);
    pauseEle.addEventListener('click', onClickPause);
    stopEle.addEventListener('click', onClickStop);
  
    function onClickPlay(event) {
      if(event.target.id == "play") {
        console.log("Estoy en Play");
        document.getElementById("play").style.display = "none";
        document.getElementById("pause").style.display = "block";
        document.getElementById("stop").style.display = "block";
  
        utterance1 = new SpeechSynthesisUtterance(document.querySelector('.ar').textContent);
        utterance1.voice = speechSynthesis.getVoices()[0];
        speechSynthesis.speak(utterance1);
        console.log(utterance1);
        if(synth.paused) { /* Reanudar Narracion */
          synth.resume();
        }
      }
    }
  
    function onClickPause() {
      if(synth.speaking && !synth.paused){ /* Pausar Narracion */
      document.getElementById("play").style.display = "block";
      document.getElementById("pause").style.display = "none";
      document.getElementById("stop").style.display = "none";
        synth.pause();
      }
    }
      
    function onClickStop(event) {
      if(synth.speaking){ /* Detener Grabacion */
        document.getElementById("play").style.display = "block";
        document.getElementById("pause").style.display = "none";
        document.getElementById("stop").style.display = "none";
        flag = false;
        synth.cancel(); 
      }
    }
  
  }
    
  else {
    /* El navegador No Soporta SpeehSynthesis */
  }
  
  
  