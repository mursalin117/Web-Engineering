<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-List</title>
</head>
<body>
    <?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
        // print_r($books);
    ?>
    <h1 align="center">Book Store</h1>
    <table border="2" align="center">
        <tr>
            <th>Book name</th>
            <th>Author</th>
            <th>Available</th>
            <th>Page</th>
        </tr>
        <?php foreach ($books as $key => $book): ?>
            <tr>
                <td><?php echo $book['title'] ?></td>
                <td><?php echo $book['author'] ?></td>
                <td><?php echo $book['available'] ?></td>
                <td><?php echo $book['pages'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p align="center">
    <a href="./add-book.html">
        <button>Add book</button>
    </a>
    </p>
</body>
</html>