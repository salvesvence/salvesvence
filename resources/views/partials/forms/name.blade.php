<label for="name">Nombre</label>

<input type="text"
       class="form-control"
       id="name"
       name="name"
       placeholder="Nombre"
       value="{{ isset($name) ? $name : '' }}"
>