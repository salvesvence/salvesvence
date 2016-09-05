@section('slick-stylesheets')
    @include('vendor.stylesheets.slick')
@endsection

<div class="post-thumbnails-slider" {{ $post->photos->count() >= 3 ?: "data-slick='{slidesToShow: 3, slidesToScroll: 3}'" }}>
    @foreach($post->photos as $photo)
        <div class="wrapper-thumbnails">
            <img data-lazy='{{ asset("{$photo->lg_thumbnail}") }}'>
        </div>
    @endforeach
</div>

@section('slick-script')
    <script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script>
        (function(){
            $('.post-thumbnails-slider').slick({
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '60px',
                arrows: false,
                dots: true
            });
        })();
    </script>
@endsection