@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Categoría {{ $category->name }}:</div>

                    <div class="panel-body">
                        <form id="update-category" action="{{ route('categories.update', $category->slug) }}" method="post">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-sm-12">
                                @include('partials.forms.name', ['name' => $category->name])
                            </div>

                            <div class="form-group col-sm-6">
                                @include('partials.navigation.save')
                            </div>

                            <div class="form-group col-sm-6">
                                @include('partials.navigation.back')
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
