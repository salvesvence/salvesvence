@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Tag:</div>

                    <div class="panel-body">
                        <form id="store-tag" action="{{ route('tags.store') }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-sm-12">
                                @include('web.atoms.inputs.name')
                            </div>

                            @include('web.molecules.forms.footer')

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
