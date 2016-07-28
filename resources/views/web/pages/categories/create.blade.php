@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Categoría:</div>

                    <div class="panel-body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#spanish" aria-controls="spanish" role="tab" data-toggle="tab">Español</a></li>
                            <li role="presentation"><a href="#english" aria-controls="english" role="tab" data-toggle="tab">Inglés</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="spanish">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>

                                    @include('web.pages.categories.partials.form')
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="english">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>

                                    @include('web.pages.categories.partials.form')
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
