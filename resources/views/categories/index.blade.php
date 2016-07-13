@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorías:</div>

                    <div class="panel-body">

                        <table class="table table-striped table-bordered">

                            <thead>

                                <tr>

                                    <td>#</td>
                                    <td>Nombre</td>
                                    <td class="text-center">Editar</td>
                                    <td class="text-center">Borrar</td>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach($categories as $category)

                                    <tr>

                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', $category->slug) }}" class="btn-block text-center">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.destroy', $category->slug) }}" class="btn-block text-center">
                                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                            </a>
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
