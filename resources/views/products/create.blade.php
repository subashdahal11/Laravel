<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    @if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
       <tr></tr>
       
       @endforeach
    </ul>
   
    
    @endif
</div>

    <h1> Create A Product now</h1>

    <form method="post" action="{{route('products.store')}}"  enctype="multipart/form-data">
    @csrf    
    <!-- @csrf  for security purpose -->
        @method('post')
        <div>
            <label> name</label>
            <input type="text" name="name" placeholder="Enter name here now" />
        </div>
        
        <div>
            <label> Qty</label>
            <input type="text" name="qty" placeholder="Enter name here now" />
        </div>
        <div>
            <label> Price</label>
            <input type="name" name="price" placeholder="Enter price" />
        </div>

        <div>
            <label> description</label>
            <input type="name" name="description" placeholder="Provide product description" />
        </div>
<div>
    <input type ="submit" value="save a product"> </input>
   
</div>
       
    </form>

<span><a href="./" >Go Back<a/> </span>
   
<div>
    
</div>
</input>
<b> </b>    
</body>
</html>