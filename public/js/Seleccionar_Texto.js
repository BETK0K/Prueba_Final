onload = function() {

  document.addEventListener('click', onClickActivarSeleccion);
      
  function onClickActivarSeleccion(event) {
    const btnplay = document.querySelector("#btn_play");
    const btnpause = document.querySelector("#btn_pause");
    const btnstop = document.querySelector("#btn_stop");
    
    if(event.target.id == "activarSeleccion" && getComputedStyle(desactivarSeleccion).display==="block") {
      console.log("Estoy activado");
      var synth = speechSynthesis;
      function speakText(text) {
        var utterThis = new SpeechSynthesisUtterance(text);
        utterThis.voice = synth.getVoices()[0];
        speechSynthesis.speak(utterThis);
      }

      function getSelectionText() {
        var text = "";
        if (window.getSelection) {
            text = window.getSelection().toString();
        } else if (document.selection && document.selection.type !== "Control") {
            text = document.selection.createRange().text;
        }
        return text;
      }
  
      document.onmouseup = function (event) {
        setTimeout(() => {
          const selectedText = getSelectionText();
          if(selectedText.length) { 
            const x = event.pageX;
            const y = event.pageY;
            const btnPlayWidth = Number(getComputedStyle(btnplay).width.slice(0,-2));
            const btnPlayHeight = Number(getComputedStyle(btnplay).height.slice(0,-2));
            const btnPauseWidth = Number(getComputedStyle(btnpause).width.slice(0,-2));
            const btnPauseHeight = Number(getComputedStyle(btnpause).height.slice(0,-2));
            const btnStopWidth = Number(getComputedStyle(btnstop).width.slice(0,-2));
            const btnStopHeight = Number(getComputedStyle(btnstop).height.slice(0,-2));
      
            if(document.activeElement !== btnplay && document.activeElement !== btnpause && document.activeElement !== btnstop ) {
              btnplay.style.left = `${x - btnPlayWidth}px`;
              btnplay.style.top = `${y - btnPlayHeight}px`;
              btnplay.style.display = "block";
              btnplay.classList.add("btnEntrance");
              
              btnpause.style.left = `${x - btnPauseWidth}px`;
              btnpause.style.top = `${y - btnPauseHeight}px`;
              
              btnstop.style.left = `${x - btnStopWidth}px`;
              btnstop.style.top = `${y - btnStopHeight}px`;
            }
            else {
              btnplay.style.left = `${x-btnPlayWidth*0.5}px`;
              btnplay.style.top = `${y-btnPlayHeight*0.5}px`;
              
              btnpause.style.left = `${x-btnPauseWidth*0.8}px`;
              btnpause.style.top = `${y-btnPauseHeight*0.5}px`;
              
              btnstop.style.left = `${x-btnStopWidth*-.4}px`;
              btnstop.style.top = `${y-btnStopHeight*0.5}px`;
            }
          }    
        }, 0);

        btnplay.addEventListener("click", btnPlayClick);
        btnpause.addEventListener("click", btnPauseClick);
        btnstop.addEventListener("click", btnStopClick);

        function btnPlayClick(event) {
          var synth = speechSynthesis;
          const selectedText = getSelectionText();
          if (selectedText.length > 0) {
            speakText(selectedText);
          }  
          if(synth.paused) {
            synth.resume();
          }
        }
                          
        function btnPauseClick() {
          var synth = speechSynthesis;
          if(synth.speaking && !synth.paused){
            synth.pause();
          }
        }
                          
        function btnStopClick() {
          var synth = speechSynthesis;
          if(synth.speaking){
            synth.cancel();
          }
        }

        document.ondblclick = function (e) {
          btnplay.style.display = "none";
          btnplay.classList.remove("btnEntrance");
          window.getSelection().empty();
        
          btnpause.style.display = "none";
          btnpause.classList.remove("btnEntrance");

          btnstop.style.display = "none";
          btnstop.classList.remove("btnEntrance");
          speechSynthesis.cancel();
        }
      }
    }
    else if (event.target.id == "desactivarSeleccion" && getComputedStyle(activarSeleccion).display==="block") {
      document.onmouseup = function (event) {
      }
        console.log("Estoy desactivado");
        btnplay.style.display = "none";
        btnplay.classList.remove("btnEntrance");
        window.getSelection().empty();
      
        btnpause.style.display = "none";
        btnpause.classList.remove("btnEntrance");

        btnstop.style.display = "none";
        btnstop.classList.remove("btnEntrance");
        speechSynthesis.cancel();
      }
    
  }
}();