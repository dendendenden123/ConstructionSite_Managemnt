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
    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
        <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
        </small> {{$project->status}}
    </p>
    </td>
    <td class="text-right">${{$project->budget}}</td>
</tr>
    
@endforeach



