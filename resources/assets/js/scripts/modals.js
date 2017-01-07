function showModal(message, modal) {
    setTimeout(function() {
        modal.find('.modal-body')
            .append('<p>' + message +'</p>');

        modal.modal('show');
    }, 400);
}