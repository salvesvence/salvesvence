@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorías:</div>
                    <div class="panel-body">
                        <form id="store-project" action="{{ route('projects.update', $project->slug) }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-sm-12">
                                @include('web.atoms.inputs.name', ['name' => $project->name])
                            </div>

                            <div class="form-group col-sm-12">
                                @include('web.atoms.textareas.description', ['description' => $project->description])
                            </div>

                            @include('web.molecules.forms.footer')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
