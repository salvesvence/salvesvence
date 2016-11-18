<tbody>

@foreach($posts as $post)

    <tr>

        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>
            @include('web.atoms.links.edit', ['route' => route('posts.edit', $post->slug)])
        </td>
        <td>
            @include('web.atoms.links.delete', ['route' => route('posts.destroy', $post->slug)])
        </td>

    </tr>

@endforeach

</tbody>
