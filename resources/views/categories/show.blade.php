@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $category->name }}:</div>

                    <div class="panel-body">

                        <p>Nombre: {{ $category->name }}</p>
                        <p>Slug: {{ $category->slug }}</p>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
