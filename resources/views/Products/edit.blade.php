<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h1 {
        margin-top: 30px;
        margin-left: 40%;
    }
    .custom {
        width: 50%;
        margin: auto;
    }

    .row-xs-3 {
        padding: 10px;
    }
</style>
</head>
<body>
        <h1>Edit Product</h1>
        <div class="custom">
            <div>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                </ul>



                @endif
            </div>
            <form method="post" action="{{route('Products.update', ['product'=>$product])}}">
                @csrf
                @method('put')
                <div class="row-xs-3">
                <label for="ex2">Name</label>
                <input class="form-control" id="ex2" type="text" name="name" value="{{$product->name}}">
                </div>

                <div class="row-xs-3">
                    <label for="ex2">Qty</label>
                    <input class="form-control" id="ex2" type="text" name="qty" value="{{$product->qty}}">
                </div>

                <div class="row-xs-3">
                    <label for="ex2">Price</label>
                    <input class="form-control" id="ex2" type="text" name="price" value="{{$product->Price}}">
                </div>

                <div class="row-xs-3">
                    <label for="ex2">Description</label>
                    <input class="form-control" id="ex2" type="text" name="description" value="{{$product->description}}">
                </div>
                <button type="submit" class="btn btn-default">Update</button>
            </div>    
          </form>
          
</body>
</html>