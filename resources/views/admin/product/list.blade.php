<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<h1 class="ml-2 mt-1">List products</h1>


<table class="table mt-5">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Infor_detial</th>
        <th scope="col">Image</th>
        <th scope="col">Image_show</th>


    </tr>
    </thead>
    @foreach($list_obj as $item)
        <tbody>
        <tr>
            <th scope="row">{{$item -> id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->infor_detail}}</td>
            <td>{{$item->image}}</td>
            <td><img src="{{$item -> image}}" alt="" style="width: 150px"></td>

        </tr>
        </tbody>
    @endforeach
</table>
<div class="row float-right mr-lg-5">
    {{$list_obj->links()}}
</div>
</body>
</html>