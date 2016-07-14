<tbody>

    @foreach($categories as $category)

        <tr>

            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                @include('web.atoms.links.edit', ['route' => route('categories.edit', $category->slug)])
            </td>
            <td>
                @include('web.atoms.links.delete', ['route' => route('categories.destroy', $category->slug)])
            </td>

        </tr>

    @endforeach

</tbody>
