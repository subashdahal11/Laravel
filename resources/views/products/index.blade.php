<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>

    <div>
        @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        
        @endif
    </div>
    <h2>  
    <a href="{{ url(path: '/product/create') }}"> Create a product</a>                               
    </h2>
   
<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>qty</th>
<th>price</th>
<th>Edit</th>
<th>Delete</th>
</tr>


    @foreach ($products as $product)
       <tr>
            <td>
                {{$product->id}}
            </td>
            <td>
                {{$product->name}}
            </td>
            <td>
                {{$product->qty}}
            </td>
            <td>
                {{$product->price}}
            </td>
      
        <td>
            <a href=" {{route('products.edit',['product'=> $product])}}">  Edit </a> </td>
            
        
        <td>
            <form method="post" action="{{route('products.delete',['product' => $product])}}">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
       </tr>
      
       @endforeach
       </table>
       
   
</body>
</html>
