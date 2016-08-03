@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorías:</div>
                    <div class="panel-body">

                        <table class="table table-striped table-bordered">
                            @include('web.pages.categories.partials.thead')
                            @include('web.pages.categories.partials.tbody')
                        </table>

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
