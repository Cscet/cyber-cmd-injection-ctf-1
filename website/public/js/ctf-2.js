import Tools from './tools.js';

if(document.querySelector('#ctf-success')) {
    Tools.updateLevelProgression(2, true, document.querySelector('#flag').textContent);
    console.log("success");
}

if(document.querySelector('#ctf-failed')) {
    Tools.updateLevelProgression(2, false, null);
    console.log("success");
}

if(document.querySelector(".alert-info")){
    document.querySelector("#form-answer").classList.remove("d-none");
}
