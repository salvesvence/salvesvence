<script src="{{ asset('js/dropzone/dropzone.js') }}"></script>

<script>

    $('.sav-dropzone').dropzone({
        parallelUploads: 5,
        autoProcessQueue: false,
        uploadMultiple: true,
        maxFilesize: 10,
        maxFiles: 2,
        init: function() {

            var submit = document.querySelector('#save'),
                $this = this;

            submit.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                $this.processQueue();

                $this.on("sendingmultiple", function(){
                    console.log('enviando...')
                });

                $this.on("successmultiple", function(files, response) {
                    console.log(response);
                });

                $this.on("errormultiple", function(files, response) {
                    console.log('mierda');
                });
            });
        }
    });
</script>