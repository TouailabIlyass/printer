
        <div>
        <form action="{{url('products/products->id')}}" method="POST">
        {{method_field('put')}}
            @include('products.formClient')
            <button type="submit" >Add</button>
        </form>
        </div>
