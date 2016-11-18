<tbody>

    @foreach($tags as $tag)

        <tr>

            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
            <td>
                @include('web.atoms.links.edit', ['route' => route('tags.edit', $tag->slug)])
            </td>
            <td>
                @include('web.atoms.links.delete', ['route' => route('tags.destroy', $tag->slug)])
            </td>

        </tr>

    @endforeach

</tbody>
