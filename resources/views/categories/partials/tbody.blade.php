<tbody>

    @foreach($categories as $category)

        <tr>

            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                @include('partials.navigation.edit', ['route' => route('categories.edit', $category->slug)])
            </td>
            <td>
                @include('partials.navigation.delete', ['route' => route('categories.destroy', $category->slug)])
            </td>

        </tr>

    @endforeach

</tbody>
