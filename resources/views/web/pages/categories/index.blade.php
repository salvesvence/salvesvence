@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorías:</div>
                    <div class="panel-body">
                        @include('web.organisms.lists.table', [
                            'route' => 'categories',
                            'list' => json_encode($categories)
                        ])

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
