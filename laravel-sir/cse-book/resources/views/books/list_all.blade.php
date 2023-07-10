<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>listAllBooks</h1>

    <table width="100%" border="1">
        <thead>
        <tr>
            <td>ID</td>
            <td>isbn</td>
            <td>title</td>
            <td>author</td>
            <td>stock</td>
            <td>price</td>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->stock}}</td>
                <td>{{$book->price}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>




</body>
</html>
