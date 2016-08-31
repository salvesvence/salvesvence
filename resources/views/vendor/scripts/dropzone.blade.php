<script src="{{ asset('js/dropzone/dropzone.js') }}"></script>

<script>

    var previewNode = document.querySelector('#dz-preview-template');
    previewNode.id = "";

    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    $('.sav-dropzone').dropzone({
        parallelUploads: 5,
        autoProcessQueue: false,
        uploadMultiple: true,
        maxFilesize: 1,
        maxFiles: 5,
        previewTemplate: previewTemplate,
        previewsContainer: "#preview",
        clickable: ".file-button",
        acceptedFiles: '.jpg',
        dictInvalidFileType: 'No puedes subir archivos de éste tipo.',
        dictFileTooBig: 'El archivo es demasiado grande (@{{filesize}}MiB). Tamaño máximo: @{{maxFilesize}}MiB.',
        init: function() {
            var submit = $('#save'),
                $this = this;

            $this.on("sendingmultiple", function(){
                submit.click(function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    $this.processQueue();

                    $this.on("successmultiple", function(files, response) {
                        showModal(response.message, $('#modal-info'));
                    });

                    $this.on("errormultiple", function(files, response) {
                        showModal(response.message, $('#modal-info'));
                    });
                });
            });
        }
    });

</script>