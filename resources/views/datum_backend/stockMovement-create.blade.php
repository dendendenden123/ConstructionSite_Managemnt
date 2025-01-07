<x-datum_blank_page>
    <h3>New Stock Movement</h3><br>
    <form class="inventoryUpdateForm" method="POST" action="/stockMovement-store">
        @csrf
        <div class="form-row">
         
            <div class="col-md-6 mb-3">
                <label for="validationDefault05">Inventory</label>
                <select class="form-control" id="validationDefault04" name="inventory_id" required>
                    @foreach($inventory as $item)
                     <option selected value="{{ $item->id}}">[{{ $item->id}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->item_name}}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="col-md-6 mb-3">
                <label for="validationDefault05">Movement Type</label>
                <select class="form-control" id="validationDefault04" name="movement_type" required>
                     <option value="In Bound">In Bound</option>
                     <option value="Out Bound">Out Bound</option>
                     <option value="Internal Movement">Internal Movement</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Quantity</label>
                <input type="number" class="form-control" id="validationDefault01" name="quantity" value="" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="validationDefault05">Project</label>
                <select class="form-control" id="validationDefault04" name="project_id" required>
                    @foreach($project as $item)
                     <option selected value="{{ $item->id}}">[{{ $item->id}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Date</label>
                <input type="date" class="form-control" id="validationDefault01" name="date" required>
            </div>

        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Insert</button>
            <a class="adminProject"><button class="btn btn-light">Back</button></a>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

        //get the project id
        var parts = window.location.href.split("/");
        var lastPart = parts[parts.length - 2];

        //assigned the project id to href
        $('.adminProject').on("click", function(){
            window.history.back();
        });

        
        $('[type="submit"]').on("click", function(event) {
          event.preventDefault();

            const actionUrl = $(this).closest(".inventoryUpdateForm").attr('action'); 
            const formData = $(this).closest(".inventoryUpdateForm").serialize();

            console.log("Submitting form data:", formData); // Debugging, remove in production

           create(actionUrl, formData);
        });


        function create(actionUrl, formData) {
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
                            html: "<b style='font-size: 30px;'>Great!!</b><br>Task Updated Successfully.",
                            continueButtonHtml: "Got it!",
                         });

                         $(".ja-continue").on("click", function(){
                            window.location.href = "/inventory";
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