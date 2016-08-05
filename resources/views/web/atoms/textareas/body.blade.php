<label for="body">Cuerpo</label>
<textarea class="form-control" id="body" name="body">{{ isset($body) ? $body : '' }}</textarea>

<script>
    CKEDITOR.replace('body', {
        language: 'es',
        scayt_sLang: 'es_ES'
    });
</script>