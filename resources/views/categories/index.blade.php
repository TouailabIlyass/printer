
        <a href="{{url('categories/create')}}" >Add</a>
        <table>
            <thead>
            <th>categorie</th>
	
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($categories as $categorie)
                <tr>
                <td>{{$categorie->categorie}}</td>
	
                <td>
                <form action="{{url('clients/'.$categorie->id)}}" method="POST">
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
        