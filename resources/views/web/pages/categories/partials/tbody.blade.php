<tbody>

    <tr v-for="category in list">

        <td>@{{ category.id }}</td>
        <td>@{{ category.name }}</td>
        <td>
            <a href="categories/@{{ category.slug }}/edit" class="btn-block text-center">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>
        </td>
        <td>
            <a href="categories/@{{ category.slug }}/delete" class="btn-block text-center">
                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
            </a>
        </td>
    </tr>

</tbody>
