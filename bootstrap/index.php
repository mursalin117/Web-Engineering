<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
        print_r($books);
    ?>
    <div class="container" align="center">
    <h1>Book Store</h1>
    <table class="table">
        <tr class="row">
            <th class="col">Book name</th>
            <th class="col">Author</th>
            <th class="col">Available</th>
            <th class="col">Page</th>
        </tr>
        <?php foreach ($books as $key => $book): ?>
            <tr class="row">
                <td class="col"><?php echo $book['title'] ?></td>
                <td class="col"><?php echo $book['author'] ?></td>
                <td class="col"><?php echo $book['available'] ?></td>
                <td class="col"><?php echo $book['pages'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="./add-book.html">
        <button>Add book</button>
    </a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>