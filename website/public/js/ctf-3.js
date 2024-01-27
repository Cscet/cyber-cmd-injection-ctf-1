import Tools from './tools.js';

if(document.querySelector('#ctf-success')) {
    Tools.updateLevelProgression(3, true, document.querySelector('#flag').textContent);
    console.log("success");
}

if(document.querySelector('#ctf-failed')) {
    Tools.updateLevelProgression(3, false, null);
    console.log("success");
}

