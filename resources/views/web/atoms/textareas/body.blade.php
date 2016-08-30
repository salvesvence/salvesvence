<label for="body">Cuerpo</label>
<textarea class="form-control" id="body" name="body"></textarea>

<script>
    var editor = CKEDITOR.replace('body', {
        language: 'es',
        scayt_sLang: 'es_ES'
    });

    editor.on( 'change', function( evt ) {
        document.getElementById('body').value = evt.editor.getData();
    });

</script>