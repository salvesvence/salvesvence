@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel-heading">Categorías:</div>

                <div class="panel-body">

                    <ul class="list-group">

                        @foreach($categories as $category)

                            <li class="list-group-item">
                                <a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
                            </li>

                        @endforeach

                    </ul>
                    
                </div>

            </div>
        </div>
    </div>

@endsection
