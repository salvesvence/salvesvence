<tbody>

    @foreach($tags as $tag)

        <tr>

            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
            <td>
                @include('partials.navigation.edit', ['route' => route('tags.edit', $tag->slug)])
            </td>
            <td>
                @include('partials.navigation.delete', ['route' => route('tags.destroy', $tag->slug)])
            </td>

        </tr>

    @endforeach

</tbody>
