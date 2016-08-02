<form action="{{ $action }}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="locale" value="{{ $locale }}">

    {{ method_field(isset($method) ? $method : 'POST') }}

    <div class="form-group col-sm-12">
        @include('web.atoms.inputs.name', ['name' => isset($name) ? $name : ''])
    </div>

    @include('web.molecules.forms.footer')

</form>