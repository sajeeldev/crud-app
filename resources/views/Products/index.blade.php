<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }
    
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
    
        th {
            background-color: #00a676; /* Green header color */
            color: white;
        }
    
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray for even rows */
        }
    
        tr:hover {
            background-color: #d1e7dd; /* Light green hover effect */
        }
    
        td {
            border-bottom: 1px solid #dddddd;
        }
    
        /* Optional: Add a box shadow for better aesthetics */
        table {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        /* Additional styling for the table header */
        th {
            border-bottom: 2px solid #dddddd;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* New styles for anchor tags */
    td a {
        display: inline-block;
        padding: 8px 12px;
        margin: 5px;
        background-color: #00a676; /* Green background */
        color: white;
        text-decoration: none;
        border-radius: 5px; /* Rounded corners */
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    td a:hover {
        background-color: #007B55; /* Darker green on hover */
    }

    td form input[type="submit"] {
        display: inline-block;
        padding: 8px 12px;
        margin: 5px;
        background-color: #e74c3c; /* Red background */
        color: white;
        border: none;
        border-radius: 5px; /* Rounded corners */
        font-size: 14px;
        font-weight: bold;
        cursor: pointer; /* Pointer cursor for better UX */
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    td form input[type="submit"]:hover {
        background-color: #c0392b; /* Darker red on hover */
    }

    /* Create New Product */

    .create a {
        display: inline-block;
        text-decoration: none;
        border-radius: 2px;
        color: #fff;
        background-color: #00a676;
        padding: 10px;
        margin: 10px;
    }
    </style>
</head>
<body>
        <h1>Products</h1>
        <div>Index</div>

        <div class="create">
            <a href="{{Route('Products.create')}}">Create New Product</a> 
        </div>

        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>

        <table border="1px solid ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->Price}}</td>
                    <td>{{$product->description}}</td>
                    <td><a href="{{route('Products.edit', ['product' => $product])}}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('Products.destroy', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</body>
</html>