function appendErrors(errors) {
    var modal = $('#modal-errors .modal-body');

    $.map(errors, function(value, key) {
        modal.find('ul').append('<li>' + value[0] + '</li>');
    });
}

function sendForm(url, data) {
    $.ajax({
        url: url,
        method: 'POST',
        data: data,
        success: function(results) {
            $('#modal-info').modal('show')
                .find('.modal-body')
                .html(results.message);
        },
        error: function(results) {
            $('#modal-errors').modal('show');
            appendErrors(results.responseJSON);
        }
    });
}

(function () {

    $('.form').on('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var url = this.action,
            data = $(this).serialize();

        sendForm(url, data);
    });

})();
