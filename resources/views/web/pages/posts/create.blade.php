@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Post:</div>
                    <div class="panel-body">
                        <form id="store-category" action="{{ route('posts.store') }}" method="post" style="height: auto;overflow: hidden;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-sm-12 col-md-6">
                                @include('web.atoms.inputs.title')
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                @include('web.atoms.selects.category')
                            </div>

                            <div class="form-group col-sm-12">
                                @include('web.atoms.textareas.body')
                            </div>

                            @include('web.molecules.forms.footer')
                        </form>

                        <div class="col-sm-12">
                            <hr>
                        </div>

                        <div class="col-sm-12">
                            @include('web.atoms.inputs.images')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dropzone')

    <script src="{{ asset('js/dropzone/dropzone.js') }}"></script>

    <script>
        // Get the template HTML and remove it from the doument
        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "http://tips.dev/backend/reports/create/upload", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        });

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
        });

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1";
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
        });

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0";
        });

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
        };
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true);
        };
    </script>
@endsection