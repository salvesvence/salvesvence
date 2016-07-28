<form id="store-category" action="{{ route('categories.store') }}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group col-sm-12">
        @include('web.atoms.inputs.name')
    </div>

    @include('web.molecules.forms.footer')

</form>
