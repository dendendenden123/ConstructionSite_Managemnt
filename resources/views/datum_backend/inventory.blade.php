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
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->item_name}}</td>
                <td>{{$item->item_description}}</td>
                <td>{{$item->rfid_tag}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a href="/invedentory-delete" class="btn btn-danger rounded-pill mt-2">Delete</a>
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
                <th scope="col">Movement ID</th>
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
                    <a href="/stockMOvement-delete" class="btn btn-danger rounded-pill mt-2">Delete</a>
                    <a href="/stockMOvement-edit" class="btn btn-primary rounded-pill mt-2">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    {{$StockMovement->links()}}
</x-datum_blank_page>