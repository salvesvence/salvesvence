@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Categoría:</div>
                    <div class="panel-body">
                        @include('web.pages.categories.partials.nav-tab')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
