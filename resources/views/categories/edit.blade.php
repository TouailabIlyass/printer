
        <div>
        <form action="{{url('categories/categories->id')}}" method="POST">
        {{method_field('put')}}
            @include('categories.formClient')
            <button type="submit" >Add</button>
        </form>
        </div>
