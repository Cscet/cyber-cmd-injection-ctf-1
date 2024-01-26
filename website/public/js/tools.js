// GESTION DES ELEMENTS DU DOM
function createMasterSuccessAlert(flag) {
    let alert = document.createElement('div');
    alert.classList.add('alert');
    alert.classList.add('alert-success');
    alert.setAttribute('role', 'alert');

    let heading = document.createElement('h4');
    heading.classList.add('alert-heading');
    heading.innerHTML = 'Success!';
    alert.append(heading);

    let message = document.createElement('p');
    message.classList.add('fsw-italic')
    message.innerHTML = flag
    alert.append(message);
    return alert;
}

// LOCAL STORAGE ACCESS

function getDataFromStorage(){
    return  localStorage.getItem('cmd-inj-ctf') ?
        JSON.parse(localStorage.getItem('cmd-inj-ctf')) :
        [
            {
                level: 1,
                success: null,
                flag: null
            }
        ]
}


function addDataToStorage(data){
    localStorage.setItem('cmd-inj-ctf',JSON.stringify(data))
}

function updateLevelProgression(level, success, flag){
    let data = getDataFromStorage();
    data[level-1].success = success;
    data[level-1].flag = flag;

    addDataToStorage(data);
}

function resetProgression(){
    localStorage.removeItem('cmd-inj-ctf');
    location.reload()
}

function checkCompletion(){
    let data = getDataFromStorage();
    return data.every((level) => level.success === true)
}

export default {
    getDataFromStorage,
    updateLevelProgression,
    resetProgression,
    checkCompletion,
    createMasterSuccessAlert
}