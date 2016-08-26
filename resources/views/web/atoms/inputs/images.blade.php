
<div id="actions" class="row">

    <div class="col-lg-7">
        <!-- The fileinput-button span is used to style the file input field as button -->
        <span class="btn btn-success fileinput-button dz-clickable">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Añadir</span>
        </span>
        <button type="submit" class="btn btn-primary start">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Subir</span>
        </button>
        <button type="reset" class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancelar</span>
        </button>
    </div>

    <div class="col-lg-5">
        <!-- The global file processing state -->
        <span class="fileupload-process"></span>
        <div id="total-progress" style="opacity: 0;" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" data-dz-uploadprogress=""></div>
        </div>
    </div>

</div>

    <!-- HTML heavily inspired by http://blueimp.github.io/jQuery-File-Upload/ -->
<div class="table table-striped files" id="previews">

    <div id="template" class="file-row">
        <div>
            <span class="preview"></span>
            <img data-dz-thumbnail>
        </div>
        <div>
            <p class="name" data-dz-name></p>
            <strong class="error text-danger" data-dz-errormessage></strong>
        </div>
        <div>
            <p class="size" data-dz-size></p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                <div class="progress-bar progress-bar-success" data-dz-uploadprogress></div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary start">
                <i class="glyphicon glyphicon-upload"></i>
                <span>Subir</span>
            </button>
            <button data-dz-remove class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancelar</span>
            </button>
            <button data-dz-remove class="btn btn-danger delete">
                <i class="glyphicon glyphicon-trash"></i>
                <span>Borrar</span>
            </button>
        </div>
    </div>

</div>

