
        <a href="{{url('products/create')}}" >Add</a>
        <table>
            <thead>
            <th>intitule</th>
	<th>description</th>
	<th>categorie_id</th>
	<th>prix</th>
	<th>size</th>
	<th>color</th>
	
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                <td>{{$product->intitule}}</td>
	<td>{{$product->description}}</td>
	<td>{{$product->categorie_id}}</td>
	<td>{{$product->prix}}</td>
	<td>{{$product->size}}</td>
	<td>{{$product->color}}</td>
	
                <td>
                <form action="{{url('clients/'.$product->id)}}" method="POST">
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
        