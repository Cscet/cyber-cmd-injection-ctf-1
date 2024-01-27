import Tools from './tools.js';

if(document.querySelector('#ctf-success')) {
    Tools.updateLevelProgression(2, true, document.querySelector('#flag').textContent);
}

if(document.querySelector('#ctf-failed')) {
    Tools.updateLevelProgression(2, false, null);
}

