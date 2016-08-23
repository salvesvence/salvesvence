@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorías:</div>
                    <div class="panel-body" id="categories">
                        <categories list="{{ json_encode($categories) }}"></categories>

                        <template id="categories-template">
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
                                    <tr v-for="category in list">
                                        <td>@{{ category.id }}</td>
                                        <td>@{{ category.name }}</td>
                                        <td>
                                            <a href="categories/@{{ category.slug }}/edit" class="btn-block text-center">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="categories/@{{ category.slug }}/delete" class="btn-block text-center">
                                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </template>

                        <div class="row">
                            <div class="col-sm-12">
                                @include('web.atoms.links.create', ['route' => route('categories.create')])
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
