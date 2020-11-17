
        <a href="{{url('checkouts/create')}}" >Add</a>
        <table>
            <thead>
            <th>quantite</th>
	<th>total</th>
	
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($checkouts as $checkout)
                <tr>
                <td>{{$checkout->quantite}}</td>
	<td>{{$checkout->total}}</td>
	
                <td>
                <form action="{{url('clients/'.$checkout->product_id)}}" method="POST">
                    <a href="">Update</a>
                    {{method_field('delete')}}
                @csrf
                <button type="submit">Delete</button>
                </form>
            </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        