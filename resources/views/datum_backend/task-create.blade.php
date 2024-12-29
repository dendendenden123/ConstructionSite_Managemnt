<x-datum_blank_page>
    <h3>Assign new task</h3><br>
    <form class="taskCreateForm" method="POST">
        @csrf
        <div class="form-row">
           <div class="col-md-6 mb-3">
              <label for="validationDefault01">Task Title</label>
              <input type="text" class="form-control" id="validationDefault01"  name="name" required>
           </div>


           <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="exampleInputdate">Start Date</label>
              <input type="date" class="form-control" id="exampleInputdate" name="start_date" >
           </div>
         </div>


           <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Assigned To (Project)
            </label>
            <select class="form-control" id="validationDefault04" name="project_id" required>
              <option selected  value="{{$defaultProject->id}}">[{{ $defaultProject->id }}]&nbsp;&nbsp;&nbsp;{{$defaultProject->name}}</option>
              @foreach ( $projectTitle as $project)
              <option value="{{$project->id}}">

                  <span>[{{ $project->id }}]&nbsp;&nbsp;&nbsp; {{ $project->name }}</span>
              </option>
              @endforeach
              
           </select>
         </div>

         <div class="col-md-6 mb-3">
         <div class="form-group">
            <label for="exampleInputdate">Due Date</label>
            <input type="date" class="form-control" id="exampleInputdate" name="due_date" >
         </div>
         </div>



           <div class="col-md-6 mb-3">
              <label for="validationDefaultUsername">Assigned To (Employee)
              </label>
              <select class="form-control" id="validationDefault04" name="employee_id" required>
                <option selected  value=""></option>
                @foreach ( $assignedEmployee as $employee)
                <option value="{{ $employee[0] }}">

                    <span>[ID: {{$employee[0] }}]&nbsp;&nbsp;&nbsp;{{ $employee[1] }}&nbsp;&nbsp;&nbsp;</span>
                    <span>[{{     $employee[2] }} tasks]</span>
                </option>
                @endforeach
                
             </select>
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

          
      

             <div class="col-md-6 mb-3">
                <label for="validationDefault02">Description</label>
                <textarea class="form-control" id="validationDefault02" name="description" required></textarea>
             </div>

       
 



        </div>
        <div class="form-group">
           <button class="btn btn-primary" type="submit">Assign</button>
           <a class= "adminProject"><button class="btn btn-light">Back</button></a>
        </div>
     </form>




    <script>

    document.addEventListener("DOMContentLoaded", function() {

        let url = window.location.href.split("/")
        let projectId = url.length - 1
        $(".taskCreateForm").attr("action", "/taskStore/" + projectId)


        //assigned the project id to href
        $('.adminProject').on("click", function(){
            window.history.back();
        });

        
        $('[type="submit"]').on("click", function(event) {
            event.preventDefault();

            const actionUrl = $(this).closest(".taskCreateForm").attr('action'); 
            const formData = $(this).closest(".taskCreateForm").serialize();

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
                            
                            window.location.href = "/admin/" + response.id;
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