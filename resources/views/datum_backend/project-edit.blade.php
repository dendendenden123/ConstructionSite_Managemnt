<x-datum_blank_page>
    <h3>Update Project ID: {{$project->id}}</h3><br>
    <form class="projectCreateForm" method="POST" action="/projectStore" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
           <div class="col-md-6 mb-3">
              <label for="validationDefault01">Project Title</label>
              <input type="text" class="form-control" id="validationDefault01"  value="{{$project->name}}" name="name" required>
           </div>

           <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="exampleInputdate">Start Date</label>
              <input type="date" class="form-control" id="exampleInputdate" value="{{$project->start_date}}"  name="start_date" >
           </div>
         </div>

         
         <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Client
            </label>
            <select class="form-control" id="validationDefault04" value="{{$project->user->name}}"  name="user_id" required>
              @foreach ($users as $user)
                    <option value="{{$user->id}}">
                        {{$user->name}}
                    </option>
              @endforeach

           </select>
         </div>

         <div class="col-md-6 mb-3">
            <div class="form-group">
                <label for="exampleInputdate">Due Date</label>
                <input type="date" class="form-control" id="exampleInputdate" value="{{$project->end_date}}"  name="end_date" >
             </div>

           </div>

           
           <div class="col-md-6 mb-3">
            <label for="validationDefault02">Cost ($)</label>
            <input type="number" class="form-control" id="validationDefault02" value="{{$project->budget}}"  name="budget"  required>
         </div>


         <div class="col-md-6 mb-3">
            <label for="validationDefault05">Status</label>
            <select class="form-control" id="validationDefault04" value="{{$project->status}}"  name="status" required>
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
              <textarea class="form-control" id="validationDefault02" name="description" rows="4" required>{{$project->description}}</textarea>
           </div>







        </div>

        <div class="form-group">
           <button class="btn btn-primary" type="submit">Update Project</button>
           <a class= "adminProject"><button class="btn btn-light">Back</button></a>
        </div>
     </form>




    <script>

    document.addEventListener("DOMContentLoaded", function() {


       

        //assigned the project id to href
        $('.adminProject').on("click", function(){
            window.history.back();
        });

        
        $('[type="submit"]').on("click", function(event) {
           event.preventDefault();

            const actionUrl = $(this).closest(".projectCreateForm").attr('action'); 
            const formData = $(this).closest(".projectCreateForm").serialize();

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
                            html: "<b style='font-size: 30px;'>Great!</b><br>Project was created successfully.",
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