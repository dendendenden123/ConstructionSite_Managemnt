<x-datum_blank_page>
    <a href="/employeeCreate"><button class="btn btn-primary" type="submit">Assign new Employee</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Project ID</th>
                <th scope="col">Rfit Tag</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Department</th>
                <th scope="col">Hourly Rate</th>
            </tr>
        </thead>
        <tbody class="employeelist">


            @foreach ($employees as $employee)
            <tr class="{{$employee->id}}">
                <td>
                    {{$employee->id}}
                </td>
                <td>
                    <div>
                        {{$employee->rfid_tag}}
                    </div>
                </td>
                <td>
                    <a href="employee/{{$employee->id}}">{{$employee->name}}</a>
                </td>
                <td>{{$employee->position}}</td>
                <td>
                    {{$employee->department}}
                </td>

                <td>
                    ${{$employee->hourly_rate}}
                </td>

                <td>
                    <a href="/employeeEdit/{{$employee->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="green" class="size-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>


                    <a class="employee_delete" href="/employeeDelete/{{$employee->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="red" class="size-1">
                            <path fill-rule="evenodd"
                                d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-datum_blank_page>
<script>
    $(document).ready(function () {
        $('.employee_delete').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('href');
            var tr = $(this).closest('tr');
            $.ajax({
                url: id,
                success: function (response) {
                    tr.remove();

               ja({
                    type: "success",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>Great!!</b><br>Employee was removed.",
                    continueButtonHtml: "Got it!",
                    });
                },
                error: function (error) {
                    ja({
                    type: "error",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>ERROR!!</b><br>" + error.responseJSON.message,
                    continueButtonHtml: "Got it!",
                    });
                }
            });
        });
    });
</script>