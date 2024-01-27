import Tools from './tools.js';

if(document.querySelector('#ctf-success')) {
    Tools.updateLevelProgression(1, true, document.querySelector('#flag').textContent);
}

if(document.querySelector('#ctf-failed')) {
    Tools.updateLevelProgression(1, false, null);
}
