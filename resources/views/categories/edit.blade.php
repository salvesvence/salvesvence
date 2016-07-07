@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Categoría {{ $category->name }}:</div>

                    <div class="panel-body">

                        <!-- #store-category form -->

                        <form id="update-category" action="{{ route('categories.update', $category->slug) }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <!-- name form input -->

                            <div class="form-group col-sm-12">

                                <label for="name">Nombre</label>

                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ $category->name }}">

                            </div>

                            <div class="form-group col-sm-12">

                                <input type="submit" class="btn" name="save" value="GUARDAR">

                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
