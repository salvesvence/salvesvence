@section('slick-stylesheets')
    @include('vendor.stylesheets.slick')
@endsection

<div class="thumbnails-slider" {{ $post->photos->count() >= 3 ?: "data-slick='{slidesToShow: 3, slidesToScroll: 3}'" }} style="background-color: grey">
    @foreach($post->photos as $photo)
        <div style="padding: 10px">
            <img data-lazy='{{ asset("{$photo->lg_thumbnail}") }}'
                 class="img-responsive img-thumbnail"
                 style="margin: 0 auto"
            >
        </div>
    @endforeach
</div>

@section('slick-script')
    <script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.thumbnails-slider').slick({
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '60px',
                arrows: false,
                dots: true
            });
        });
    </script>
@endsection