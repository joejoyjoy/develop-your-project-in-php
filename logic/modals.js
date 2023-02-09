const modalDeleteVPN = document.getElementById('modalDeleteVPN')
modalDeleteVPN.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    const modalTitle = modalDeleteVPN.querySelector('.modal-title')
    const buttonDeleteVPN = modalDeleteVPN.querySelector('.delete-vpn-modal')
    const modalBodyInput = modalDeleteVPN.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
    buttonDeleteVPN.setAttribute("href", "../crud/delete.php?vpn_id=" + recipient);
})