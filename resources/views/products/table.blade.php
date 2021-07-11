<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Tittle</th>
        <th>Price</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                       <td>{{ $product->tittle }}</td>
            <td>{{ $product->price }}</td>
            <td> <img src="{{ $product->image }}"> </td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
