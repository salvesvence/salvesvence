<list-table list="{{ $list }}"></list-table>

<template id="list-table">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>#</td>
            <td>Nombre</td>
            <td class="text-center">Editar</td>
            <td class="text-center">Borrar</td>
        </tr>
        </thead>

        <tbody>
        <tr v-for="item in list">
            <td>@{{ item.id }}</td>
            <td>@{{ item.name }}</td>
            <td>
                <a href="{{ $route }}/@{{ item.slug }}/edit" class="btn-block text-center">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>
            <td>
                <a href="{{ $route }}/@{{ item.slug }}/delete" class="btn-block text-center">
                    <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</template>