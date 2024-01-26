import Tools from './tools.js';

if(document.querySelector('#cft-1-success')) {
    Tools.updateLevelProgression(1, true, document.querySelector('#flag').textContent);
}

if(document.querySelector('#cft-1-failed')) {
    Tools.updateLevelProgression(1, false, null);
}
