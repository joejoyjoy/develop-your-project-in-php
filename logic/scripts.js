
const profileElements = ['IP_Adress'];

const addProfileEventListeners = () => {
    profileForm.addEventListener('submit', submitLogin);
    profileElements.forEach((profileInput) => {
        document.getElementById(profileInput).addEventListener('focusout', validateField);
        document.getElementById(profileInput).addEventListener('keydown', validateField);
    });
}

const validateField = (event) => {
    const domElement = event.target;
    const regex = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;

    if (event.type === 'keydown') setErrorField(domElement, 's-none');
    else if (!domElement.value.match(/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/)) {
        setErrorField(event.target, 'd-block')
    }

}

const setErrorField = (domElement, action, message) => {
    let errorText = document.querySelector(`[data-target=${domElement.id}]`);
    let originalText = document.querySelector(`label[for=${domElement.id}]`).textContent;

    if (message) {
        errorText.textContent = message;
        return;
    }

    if (action === 'show') {
        domElement.style.color = 'red';
        domElement.style.border = '3px solid red';
        errorText.textContent = `El campo ${originalText} no es correcto`;

    } else {
        domElement.style.color = 'black';
        domElement.style.border = '1px solid black';
        errorText.textContent = '';
    }
}