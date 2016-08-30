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
        init: function() {

            var submit = document.querySelector('#save'),
                $this = this;

            submit.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                $this.processQueue();

                $this.on("sendingmultiple", function(){
                    console.log('enviando...');
                });

                $this.on("successmultiple", function(files, response) {
                    console.log(response);
                });

                $this.on("errormultiple", function(files, response) {
                    console.log(response);
                });
            });
        }
    });

</script>