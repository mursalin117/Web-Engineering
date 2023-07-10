<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use Bookstore\Domain\Book;
        use Bookstore\Domain\Customer;

        function __autoload ($classname) {
            $lastSlash = strpos($classname, '\\') + 1;
            $classname = substr($classname, $lastSlash);
            $directory = str_replace('\\', '/', $classname);
            $filename = __DIR__ . 'src/' . $directory . '.php';
            require_once($filename);
        }

        $book = new Book(9785267006323, "1984", "George Orwell", 12);
        $book = (string) $book;
        
        echo $book;  
    ?>
</body>
</html>