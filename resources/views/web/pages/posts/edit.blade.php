@extends('web.templates.app')

@section('kartik-stylesheets')
    @include('vendor.stylesheets.kartik')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Post:</div>
                    <div class="panel-body">
                        <form id="update-category" action="{{ route('posts.update', $post->slug) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" name="category_id" value="{{ $post->category_id }}">
                            <div class="form-group col-sm-12">
                                @include('web.atoms.inputs.title', ['title' => $post->title])
                            </div>
                            <div class="form-group col-sm-12">
                                @include('web.atoms.textareas.body', ['body' => $post->body])
                            </div>
                            <div class="col-sm-12">
                                @include('web.atoms.inputs.images')
                            </div>
                            <div class="col-sm-12"><hr></div>
                            <div class="col-sm-12">
                                @foreach($post->photos as $photo)
                                    <img src='{{ asset("{$photo->lg_thumbnail}") }}' class="img-responsive img-thumbnail">
                                @endforeach
                            </div>
                            <div class="col-sm-12"><hr></div>
                            @include('web.molecules.forms.footer')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('kartik-script')
    <script>
        (function () {
            $(".kartic").fileinput({"showUpload":false, "previewFileType":"any"});
        })();
    </script>
@endsection