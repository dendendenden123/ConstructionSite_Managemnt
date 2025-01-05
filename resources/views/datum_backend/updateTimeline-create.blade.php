<x-datum_blank_page>
    <h3>New Project Update</h3><br>
    <form class="UpdateProjectCreateForm" method="POST" >
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Employee Name </label>
                <input type="text" class="form-control" id="validationDefault01" value="{{$employee->name}}"  readonly required>
                <input type="hidden" name="employee_id" value="{{$employee->id}}">
            </div>


            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputdate">Update Title</label>
                    <input type="text" class="form-control" id="exampleInputdate" name="update_title">
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefaultUsername">Project Title
                </label>
                <select class="form-control" id="validationDefault04" name="project_id" required>
                    <option selected disabled value="choose">Choose...</option>
                    @foreach ( $employee->task as $task)
                    <option value="{{$task->project->id}}" name="project_id">
                        <span>[{{ $task->project->id }}]&nbsp;&nbsp;&nbsp; {{ $task->project->name}} </span>
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputdate">Project Update Description
                    </label>
                    <input type="text" class="form-control" id="exampleInputdate" name="update_description">
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputdate">Progress percentage
                    </label>
                    <input type="range" class="form-control-range" id="formControlRange" name="progress_percentage"
                        min="0" max="100" oninput="this.nextElementSibling.value = this.value">
                    <output>50</output>
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault05">Status</label>
                <select class="form-control" id="validationDefault04" name="status" required>
                    <option selected value="pending">pending</option>
                    <option value="In progress">In progress</option>
                    <option value="done">done</option>
                    <option value="cancelled">cancelled</option>
                    <option value="delayed">delayed</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>


            <div class="form-group">
                <button class="btn btn-primary" type="submit">Assign</button>
                <a class="adminProject"><button class="btn btn-light">Back</button></a>
            </div>
    </form>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

        let url = window.location.href.split("/")
        let employeeId = url.length - 1

        let nextUrl = url[employeeId];
        
        $(".UpdateProjectCreateForm").attr("action", "/projectUpdateCreate/" + nextUrl)


        //assigned the project id to href
        $('.adminProject').on("click", function(){
            window.history.back();
        });
 
        
        $('[type="submit"]').on("click", function(event) {
            event.preventDefault();

            const actionUrl = $(this).closest(".UpdateProjectCreateForm").attr('action'); 
            const formData = $(this).closest(".UpdateProjectCreateForm").serialize();

            console.log("Submitting form data:", formData); // Debugging, remove in production

            update(actionUrl, formData);
        });


        function update(actionUrl, formData) {
            $.ajax({
                url: actionUrl,
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(response) {
                        ja({
                            type: "success",
                            animation: "rotateX",
                            html: "<b style='font-size: 30px;'>Great!!</b><br>Task was Assigned Successfully.",
                            continueButtonHtml: "Got it!",
                         });

                         $(".ja-continue").on("click", function(){
                            
                            window.location.href = "/employee/" + nextUrl;
                         })

                        
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error("Error:", error.responseText);
                        ja({
                            type: "error",
                            animation: "rotateX",
                            html: "<b style='font-size: 30px;'>eroorr..!!</b><br>." +  error.responseText,
                            continueButtonHtml: "Got it!",
                         });
                },
            });
        }
});
        
    </script>
</x-datum_blank_page>