@extends('web.templates.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Post:</div>

                    <div class="panel-body">
                        <form id="update-category" action="{{ route('posts.update', $post->slug) }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="category_id" value="{{ $post->category_id }}">

                            <div class="form-group col-sm-12">
                                @include('web.atoms.inputs.title', ['title' => $post->title])
                            </div>

                            <div class="form-group col-sm-12">
                                @include('web.atoms.textareas.body', ['body' => $post->body])
                            </div>

                            @include('web.molecules.forms.footer')

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
