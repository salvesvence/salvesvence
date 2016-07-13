@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $category->name }}:</div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <article class="categorie">
                                    <p>Nombre: {{ $category->name }}</p>
                                    <p>Slug: {{ $category->slug }}</p>
                                </article>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{ URL::previous() }}" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-triangle-left" aria-hidden="true">ATRÁS</span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
