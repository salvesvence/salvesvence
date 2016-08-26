<div class="title">Imágenes</div>

<div id="actions" class="row">

    <div class="col-lg-7">
        <span style="margin: 10px 0" class="btn btn-success fileinput-button dz-clickable">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Añadir</span>
        </span>
        <button style="margin: 10px 0" type="submit" class="btn btn-primary start">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Subir</span>
        </button>
        <button style="margin: 10px 0" type="reset" class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancelar</span>
        </button>
    </div>

    <div class="col-lg-5">
        <span class="fileupload-process"></span>
        <div id="total-progress" style="opacity: 0;" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" data-dz-uploadprogress=""></div>
        </div>
    </div>

</div>

<div class="table table-striped files" id="previews">

    <div id="template" class="file-row row">
        <div class="pull-left col-xs-12 col-sm-2 col-lg-2">
            <span class="preview"></span>
            <img src="" data-dz-thumbnail class="thumbnail" style="margin: 0">
        </div>
        <div class="pull-left col-xs-12 col-sm-3 col-lg-2" style="padding: 10px">
            <p class="name" data-dz-name></p>
            <strong class="error text-danger" data-dz-errormessage></strong>
        </div>
        <div class="pull-left col-xs-12 col-sm-7 col-lg-4" style="padding: 10px">
            <p class="size" data-dz-size></p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                <div class="progress-bar progress-bar-success" data-dz-uploadprogress></div>
            </div>
        </div>
        <div class="pull-right col-xs-12 col-lg-4">
            <button style="margin: 10px 0" class="btn btn-primary start">
                <i class="glyphicon glyphicon-upload"></i>
                <span>Subir</span>
            </button>
            <button style="margin: 10px 0" data-dz-remove class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancelar</span>
            </button>
            <button style="margin: 10px 0" data-dz-remove class="btn btn-danger delete">
                <i class="glyphicon glyphicon-trash"></i>
                <span>Borrar</span>
            </button>
        </div>
        <div class="col-lg-12">
            <hr>
        </div>
    </div>

</div>

