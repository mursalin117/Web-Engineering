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

        use Bookstore2\Domain\Book as uBook;
        use Bookstore2\Domain\Customer as UCustomer;

        function autoloader1($classname) {
            $lastSlash = strpos($classname, '\\') + 1;
            $classname = substr($classname, $lastSlash);
            $directory = str_replace('\\', '/', $classname);
            $filename = __DIR__ . '/' . 'src' . '/' . $directory . '.php';
            // echo $filename;
            require_once($filename);
        }
        spl_autoload_register('autoloader1');

        function autoloader2($classname) {
            $lastSlash = strpos($classname, '\\') + 1;
            $classname = substr($classname, $lastSlash);
            $directory = str_replace('\\', '/', $classname);
            $filename = __DIR__ . '/' . 'usr' . '/' . $directory . '.php';
            // echo $filename;
            require_once($filename);
        }
        spl_autoload_register('autoloader2');

        $book1 = new Book(123, "abc", "abcd", 12);
        $book1 = (string) $book1;
        echo $book1;
        echo '<br><br>';
        $customer1 = new Customer(12, "aab", "abb", "ef@email.com");
        $customer1 = (string) $customer1;
        echo $customer1;

        echo '<br><br><br><br>';
        $book2 = new Book(124, "abcx", "abcdx");
        $book2 = (string) $book2;
        echo $book2;
        echo '<br><br>';
        $customer2 = new Customer(123, "aad", "add", "eff@email.com");
        $customer2 = (string) $customer2;
        echo $customer2;
    ?>
</body>
</html>