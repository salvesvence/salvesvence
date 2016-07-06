@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <h1>Categorías:</h1>

                <ul>

                    @foreach($categories as $category)

                        <li>
                            <a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
                        </li>

                    @endforeach

                </ul>

            </div>
        </div>
    </div>

@endsection
