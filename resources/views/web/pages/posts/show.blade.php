@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->name }}:</div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <article class="categorie">
                                    <p>Título: {{ $post->title }}</p>
                                    <p>Cuerpo: {{ $post->body }}</p>
                                </article>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                @include('web.atoms.buttons.back')
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
