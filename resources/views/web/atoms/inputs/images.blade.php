<div class="title" style="margin-bottom: 15px">Imágenes</div>

<a class="file-button btn btn-success">
    <i class="glyphicon glyphicon-plus"></i>
    <span>Añadir Imágenes</span>
</a>

<hr>

<div class="table table-striped files" id="preview">

    <div id="dz-preview-template" class="file-row row">
        <div class="pull-left col-xs-12 col-sm-2 col-lg-2">
            <span class="preview"></span>
            <img src="" data-dz-thumbnail class="thumbnail" style="margin: 0">
        </div>
        <div class="pull-left col-xs-12 col-sm-3 col-lg-2" style="padding: 10px">
            <p class="name" data-dz-name></p>
            <strong class="error text-danger" data-dz-errormessage></strong>
            <p class="size" data-dz-size></p>
        </div>
        <div class="pull-right col-xs-12 col-lg-4">
            <button style="margin: 10px 0" data-dz-remove class="btn btn-danger pull-right delete">
                <i class="glyphicon glyphicon-trash"></i>
                <span>Borrar</span>
            </button>
        </div>
        <div class="col-sm-12"><hr></div>
    </div>

</div>

<div class="fallback">
    <input name="file" type="file" multiple>
</div>
