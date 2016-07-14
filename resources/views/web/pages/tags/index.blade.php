@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tags:</div>

                    <div class="panel-body">

                        <table class="table table-striped table-bordered">
                            @include('web.pages.tags.partials.thead')
                            @include('web.pages.tags.partials.tbody')
                        </table>

                        <div class="row">
                            <div class="col-sm-12">
                                @include('web.atoms.links.create', ['route' => route('tags.create')])
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
