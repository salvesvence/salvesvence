function appendErrors(errors) {
    var modal = $('#modal-info .modal-body');

    modal.html( errors.message[0] )
         .append('<ul></ul>');

    delete errors.message;

    $.map(errors, function(value, key) {
        modal.find('ul').append('<li>' + value[0] + '</li>');
    });
}

function sendForm(url, data) {
    var modal = $('#modal-info');

    $.ajax({
        url: url,
        method: 'POST',
        data: data,
        success: function(results) {
            modal.modal('show')
                 .find('.modal-body')
                 .html(results.message);
        },
        error: function(results) {
            modal.modal('show');
            appendErrors(results.responseJSON);
        }
    });
}

(function () {

    $('form').on('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var url = this.action,
            data = $(this).serialize();

        sendForm(url, data);
    });

})();