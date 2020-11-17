
        <div>
        <form action="{{url('commands/commands->id')}}" method="POST">
        {{method_field('put')}}
            @include('commands.formClient')
            <button type="submit" >Add</button>
        </form>
        </div>
