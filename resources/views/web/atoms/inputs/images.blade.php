@section('kartik-stylesheets')
    @include('vendor.stylesheets.kartik')
@endsection

<label for="kartik-images">Imágenes</label>
<input id="kartik-images" class="kartic" name="images[]" type="file" multiple="multiple">

@section('kartik-script')
    <script>
        (function () {
            $(".kartic").fileinput({"showUpload":false, "previewFileType":"any"});
        })();
    </script>
@endsection