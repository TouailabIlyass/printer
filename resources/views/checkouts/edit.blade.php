
        <div>
        <form action="{{url('checkouts/checkouts->product_id')}}" method="POST">
        {{method_field('put')}}
            @include('checkouts.formClient')
            <button type="submit" >Add</button>
        </form>
        </div>
