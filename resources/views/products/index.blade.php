<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->qty}}</th>
                <th>{{$product->price}}</th>
                <th>{{$product->description}}</th>   
                <th><a href="{{route('product.edit', ['product' => $product])}}">Edit</a></th>  
            </tr>
        @endforeach
    </table>
</body>
</html>