 
 @foreach ($projects as $project) 
 <tr class="{{$project->id}}"> 
  <td>
    {{$project->id}}
</td>
<td>
    <div>
        <a href="/admin/{{$project->id}}"> {{$project->name}}</a>
    </div>
</td>
<td>
    {{$project->user->name}}
</td>
<td>{{$project->description}}</td>
<td>
    ${{$project->budget}}
</td>
<td>
    <p>
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
<td>
   {{ date('Y-m-d', strtotime($project->start_date))}}
</td>
<td>
       {{{ date('Y-m-d', strtotime($project->due_date))}}}
</td>

<td>
    <a href="/projectEdit/{{$project->id}}">
        <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 50 50" stroke-width="1.5" stroke="green" class="size-1">
           <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </svg>
    </a>


   <a class="project_delete"  href="/projectDelete/{{$project->id}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="red" class="size-1">
            <path fill-rule="evenodd" d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z" clip-rule="evenodd" />
        </svg>
   </a>
</td>
</tr>
@endforeach


