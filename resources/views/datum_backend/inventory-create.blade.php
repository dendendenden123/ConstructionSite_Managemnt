<x-datum_blank_page>
    <h3>Create New Inventory</h3><br>
    <form class="inventoryUpdateForm" method="POST" action="/inventory-store">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Item name</label>
                <input type="text" class="form-control" id="validationDefault01" name="item_name" value="" required>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault01">RFID TAG</label>
                <input type="number" class="form-control" id="validationDefault01" name="rfid_tag" value="" required>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Quantity</label>
                <input type="number" class="form-control" id="validationDefault01" name="quantity" value="" required>
            </div>




            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Unit Price</label>
                <input type="number" class="form-control" id="validationDefault01" name="unit_price" value="" required>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Item Description</label>
                <textarea class="form-control" id="validationDefault01" name="item_description" required></textarea>
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