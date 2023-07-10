<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Book Store</title>
</head>

<body>
  <h1>Book List</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>

      <?php

      use Bookstore\Utils\Config;

      function autoloader($classname)
      {
        $lastSlash = strpos($classname, '\\') + 1;
        $classname = substr($classname, $lastSlash);
        $directory = str_replace('\\', '/', $classname);
        $filename = __DIR__ . '/' . 'src' . '/' . $directory . '.php';
        // echo $filename;
        require_once($filename);
      }
      spl_autoload_register('autoloader');

      $dbConfig = Config::getInstance()->get('db');
      // $dbConfig = $Config['db'];
      // var_dump($dbConfig);
      // print_r($dbConfig);

      $db = new PDO(
        'mysql:host=127.0.0.1;dbname=bookstore',
        $dbConfig['user'],
        $dbConfig['password']
      );
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      $rows = $db->query('SELECT * FROM book ORDER BY title');
      ?>
      <?php foreach ($rows as $book) : ?>
        <tr>
          <td><?php echo $book['title']; ?></td>
          <td><?php echo $book['author']; ?></td>
          <td><?php echo $book['stock']; ?></td>
          <td><?php echo $book['price']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>