<tbody>

@foreach($projects as $project)

    <tr>

        <td>{{ $project->id }}</td>
        <td>{{ $project->name }}</td>
        <td>
            @include('web.atoms.links.edit', ['route' => route('projects.edit', $project->slug)])
        </td>
        <td>
            @include('web.atoms.links.delete', ['route' => route('projects.destroy', $project->slug)])
        </td>

    </tr>

@endforeach

</tbody>
