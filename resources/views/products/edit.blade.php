<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Crud</title>
</head>
<body>
    <h1>Product Edit</h1>
    <div>Edit a Product</div>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder = "input name" value="{{$product->name}}">
    </div>

    <div>
        <label for="qty">Quantity</label>
        <input type="number" name="qty" placeholder = "input quantity" value="{{$product->qty}}">
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" name="price" placeholder = "input price" value="{{$product->price}}">
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" placeholder = "input description" value="{{$product->description}}">
    </div>

    <div>
    <button type="submit" value="Save a New Product">Update</button>
    </div>
    </form>
</body>
</html>