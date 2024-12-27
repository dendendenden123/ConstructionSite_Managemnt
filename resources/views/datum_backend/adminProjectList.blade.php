 @foreach ($projects as $project)

<tr class="white-space-no-wrap">
    <td>{{$project->created_at}}</td>
    <td>
    <div class="d-flex align-items-center">
        <div class="avatar-45 mr-2">
            <img src="{{ asset('/datum_assets/images/user/2.jpg') }}" class="img-fluid rounded-circle"
                alt="image">
        </div>
        <div><a href="/admin/{{$project->id}}"> {{$project->name}}</a></div>
    </div>
    </td>
    <td>{{$project->end_date}}</td>
    <td>
    <p class="mb-0 d-flex justify-content-start align-items-center">
        @if($project->status == "done")
            <span class="mt-2 badge badge-pill badge-success">{{$project->status}}</span>
        @elseif ($project->status == "cancelled")
            <span class="mt-2 badge badge-pill badge-warning">{{$project->status}}</span>
        @elseif ($project->status == "delayed")
            <span class="mt-2 badge badge-pill badge-danger">{{$project->status}}</span>
        @else
            {{-- In progress --}}
             <span class="mt-2 badge badge-pill badge-primary">{{$project->status}}</span>
        @endif
    </p>
    </td>
    <td class="text-right">${{$project->budget}}</td>
</tr>
    
@endforeach



