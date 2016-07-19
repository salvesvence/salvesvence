@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Tag {{ $tag->name }}:</div>

                    <div class="panel-body">
                        <form id="update-tag" action="{{ route('tags.update', $tag->slug) }}" method="post">

                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                            <div class="form-group col-sm-12">
                                @include('web.atoms.inputs.name', ['name' => $tag->name])
                            </div>

                            <div class="form-group col-sm-6">
                                @include('web.atoms.buttons.back')
                            </div>

                            <div class="form-group col-sm-6">
                                @include('web.atoms.buttons.save')
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
