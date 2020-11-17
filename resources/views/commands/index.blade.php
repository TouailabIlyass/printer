
        <a href="{{url('commands/create')}}" >Add</a>
        <table>
            <thead>
            <th>email</th>
	<th>phone</th>
	<th>firstname</th>
	<th>lastname</th>
	<th>area</th>
	<th>address</th>
	<th>postalcode</th>
	<th>house</th>
	<th>country</th>
	<th>type_payment</th>
	<th>mail_paypal</th>
	<th>total</th>
	
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($commands as $command)
                <tr>
                <td>{{$command->email}}</td>
	<td>{{$command->phone}}</td>
	<td>{{$command->firstname}}</td>
	<td>{{$command->lastname}}</td>
	<td>{{$command->area}}</td>
	<td>{{$command->address}}</td>
	<td>{{$command->postalcode}}</td>
	<td>{{$command->house}}</td>
	<td>{{$command->country}}</td>
	<td>{{$command->type_payment}}</td>
	<td>{{$command->mail_paypal}}</td>
	<td>{{$command->total}}</td>
	
                <td>
                <form action="{{url('clients/'.$command->id)}}" method="POST">
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
        