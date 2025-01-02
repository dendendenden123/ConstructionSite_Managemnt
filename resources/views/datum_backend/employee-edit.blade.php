<x-datum_blank_page>
    <h3>Employee ID: {{{$employee->id}}} | Update</h3><br>
    <form class="employeeUpdateForm" method="POST" action="/employeeUpdate/{{$employee->id}}">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Employee Name</label>
                <input type="text" class="form-control" id="validationDefault01" name="name" value="{{$employee->name}}"
                    required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="validationDefaultUsername">Position
                </label>
                <select class="form-control" id="validationDefault04" name="position" required>
                    <option selected value="{{$employee->position}}">{{$employee->position}}</option>
                    <option value="Project Manager">Project Manager</option>
                    <option value="Foreman">Foreman</option>
                    <option value="Civil Engineer">Civil Engineer</option>
                    <option value="Structural Engineer">Structural Engineer</option>
                    <option value="Architect">Architect</option>
                    <option value="Quality Control Engineer">Quality Control Engineer</option>
                    <option value="Construction IT Specialist">Construction IT Specialist</option>
                    <option value="Human Resources Manager">Human Resources Manager</option>
                    <option value="Equipment Operator">Equipment Operator</option>
                    <option value="Safety Officer">Safety Officer</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Plumber ">Plumber </option>
                    <option value="Carpenter ">Carpenter </option>
                    <option value="Mason ">Mason </option>
                    <option value="Laborer">Laborer </option>
                </select>
            </div>



            <div class="col-md-6 mb-3">
                <label for="validationDefaultUsername">Department
                </label>
                <select class="form-control" id="validationDefault04" name="department" required>
                    <option selected value="{{$employee->department}}">{{$employee->department}}</option>
                    <option value="Project Managament and Administration">Project Managament and Administration</option>
                    <option value="Engineering and Design">Egineering and Design</option>
                    <option value="Operations and Field Work">Operations and Field Work</option>
                    <option value="Quality Control and Maintenance">Quality Control and Maintenance</option>
                    <option value="Technology and Innovation">Technology and Innovation</option>
                    <option value="Finance and Administration">Finance and Administration</option>
                </select>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Hourly Rate</label>
                <input type="text" class="form-control" id="validationDefault01" name="hourly_rate"
                    value="{{$employee->hourly_rate}}" required>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Rfid Tag</label>
                <div style="display: flex; align-items: center; width: 300px;">
                    <input type="text" class="form-control" id="validationDefault01" name="rfid_tag"
                        value="{{$employee->rfid_tag}}" required>
                    <div class="btn btn-info rfidButton">Clear</div>
                </div>
            </div>




            {{-- <div style="display: flex; align-items: center; width: 300px;">
                <input type="text" placeholder="Enter text"
                    style="flex: 1; padding: 8px; border: 1px solid #ccc; border-right: none; border-radius: 4px 0 0 4px; outline: none;">
                <button
                    style="padding: 8px 16px; border: 1px solid #ccc; background-color: #007BFF; color: white; border-radius: 0 4px 4px 0; cursor: pointer;">
                    Search
                </button>
            </div> --}}

        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
            <a class="adminProject"><button class="btn btn-light submitUpdate">Back</button></a>
        </div>
    </form>




    <script>
        document.addEventListener("DOMContentLoaded", function() {

            rfifButtonToggle(event);
            
        //get the project id
        var parts = window.location.href.split("/");
        var lastPart = parts[parts.length - 2];

    
        $('.adminProject').on("click", function(){
            window.history.back();
        });

        
        $('[type="submit"]').on("click", function(event) {
         event.preventDefault();

            const actionUrl = $(this).closest(".employeeUpdateForm").attr('action'); 
           console.log(actionUrl);
            const formData = $(this).closest(".employeeUpdateForm").serialize();
        update(actionUrl, formData);
        });


        function update(actionUrl, formData) {
            $.ajax({
                url: actionUrl,
                method: 'POST',
                data: formData,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(response) {

                  console.log(response.message);

                    if(response.message == "success"){
                        ja({
                            type: "success",
                            animation: "rotateX",
                            html: "<b style='font-size: 30px;'>Great!!</b><br>Employee's information was updated Successfully.",
                            continueButtonHtml: "Got it!",
                         });

                         $(".ja-continue").on("click", function(){
                           window.location.href = "/employeeList";
                         })       
                }else if(response.message == "error"){
                    ja({
                        type: "error",
                        animation: "rotateX",
                        html: "<b style='font-size: 30px;'>eroorr..!!</b><br>" + "Rfid Tag already exist",
                        continueButtonHtml: "Got it!",
                     });
                }
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
function rfifButtonToggle(event){
    event.preventDefault()

    setInterval(function() {
        if ($('input[name="rfid_tag"]').val().length > 0) {
            $(".rfidButton").html("Clear");
            $(".rfidButton").on("click", function(){
                $('input[name="rfid_tag"]').val('');
                $('input[name="rfid_tag"]').focus();
             });
        } else {
            $(".rfidButton").html("Scan");
        }
    }, 1000);

    $(".rfidButton").on("click", function(){
        
    });
}

    </script>
</x-datum_blank_page>