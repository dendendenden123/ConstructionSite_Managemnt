<x-datum_blank_page>
    <hr style="border-width: 6px; border-color: black" />
    <h3>Inventory</h3>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Inventory Id</th>
                <th scope="col">Item name</th>
                <th scope="col">Item description</th>
                <th scope="col">rfid tag</th>
                <th scope="col">quantity</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventory as $item)
            <tr id="{{$item->id}}">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->item_name}}</td>
                <td>{{$item->item_description}}</td>
                <td>{{$item->rfid_tag}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a href="/invedentory-delete/{{$item->id}}" class="btn btn-danger rounded-pill mt-2 inventory-delete">Delete</a>
                    <a href="/invedentory-edit/{{$item->id}}" class="btn btn-primary rounded-pill mt-2">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    {{$inventory->links()}}

    <br><br>
    <hr style="border-width: 6px; border-color: black" />
    <h3>Inventory Movement</h3>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Inventory Id</th>
                <th scope="col">Movement Type</th>
                <th scope="col">quantity</th>
                <th scope="col">Project Id</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($StockMovement as $item)

            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->inventory_id}}</td>
                <td>{{$item->movement_type}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->project_id}}</td>
                <td>{{$item->date}}</td>
                <td>
                    <a href="/stockMOvement-delete/{{$item->id}}" class="btn btn-danger rounded-pill mt-2 stockMovement-delete">Delete</a>
                    <a href="/stockMOvement-edit/{{$item->id}}" class="btn btn-primary rounded-pill mt-2">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    {{$StockMovement->links()}}
</x-datum_blank_page>

<script>
    document.addEventListener("DOMContentLoaded", function() {

    $('.inventory-delete').on("click", function(event) {
        event.preventDefault();
        let url = $(this).attr("href");
        destroy(url);
    });


    $('.stockMovement-delete').on("click", function(event) {
        event.preventDefault();
        let url = $(this).attr("href");
        destroy(url);
    });

    function destroy(url) {
        $.ajax({
            url: url,
            success: function(response) {
                    ja({
                        type: "success",
                        animation: "rotateX",
                        html: "<b style='font-size: 30px;'>Great!!</b><br>Task Updated Successfully.",
                        continueButtonHtml: "Got it!",
                    });

                    $(".ja-continue").on("click", function(){
                      location.reload();
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