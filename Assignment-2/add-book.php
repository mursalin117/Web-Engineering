<?php
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Add</title>
</head>

<body align="center">
    <p>Form submitted? <?php echo (int) $submitted; ?></p>
    <p>Book info is</p>
    <dl>
        <dt><b>Book Title</b>: <?php echo $_POST['title']; ?></dt>
        <dt><b>Author Name</b>: <?php echo $_POST['author']; ?></dt>
        <dt><b>Available</b>: <?php echo $_POST['available']; ?></dt>
        <dt><b>Pages</b>: <?php echo $_POST['pages']; ?></dt>
        <dt><b>ISBN</b>: <?php echo $_POST['isbn']; ?></dt>
    </dl>
    <?php
    $newBook = array([
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'available' => $_POST['available'],
        'pages' => (int)$_POST['pages'],
        'isbn' => (int)$_POST['isbn']
    ]);

    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);

    $all = array_merge($books, $newBook);
    // print_r($all);

    $booksJson = json_encode($all);
    file_put_contents('books.json', $booksJson);
    ?>
    <a href="./index.php">
        <button>Back to Book Store</button>
    </a>
</body>

</html>