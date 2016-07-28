@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Post:</div>

                    <div class="panel-body">
                        <form id="store-category" action="{{ route('posts.store') }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-sm-12">
                                @include('web.atoms.inputs.title')
                            </div>

                            <div class="form-group col-sm-12">
                                @include('web.atoms.textareas.body')
                            </div>

                            @include('web.molecules.forms.footer')

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection