<script src="{{ asset('js/dropzone/dropzone.js') }}"></script>

<script>

    var previewNode = $("#template"),
        previewTemplate = previewNode.parent().html();

    previewNode.remove();

    var myDropzone = new Dropzone( document.body, {
        url: "{{ $url }}",
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false,
        previewsContainer: "#previews",
        clickable: ".fileinput-button"
    });

    myDropzone.on("addedfile", function(file) {
        $("input.save").click(function() {
            myDropzone.enqueueFile(file);
        });
    });

</script>