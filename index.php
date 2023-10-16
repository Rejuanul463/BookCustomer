<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    require_once './Book.php';
    require_once './Customer.php';
    $book = [];
    $customer = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle form submission
        if (isset($_POST['book_isbn']) && isset($_POST['book_title']) && isset($_POST['book_author']) && isset($_POST['book_quantity'])) {
            $book[$_POST['book_title']] = new Book($_POST['book_isbn'], $_POST['book_title'], $_POST['book_author'], $_POST['book_quantity']);
            echo $book[$_POST['book_title']]->__toString();
        }

        if (isset($_POST['customer_id']) && isset($_POST['customer_first_name']) && isset($_POST['customer_last_name']) && isset($_POST['customer_email'])) {
            $customer[$_POST['customer_id']] = new Customer($_POST['customer_id'], $_POST['customer_first_name'], $_POST['customer_last_name'], $_POST['customer_email']);
            echo $customer[$_POST['customer_id']]->__toString();
        }
    }else if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($value == "get book"){
            foreach($b : $books){
                echo b->__tostring();
            }

        }
    }
    ?>

    <h2>Create Book</h2>
    <form method="POST" action="">
        <label for="isbn">ISBN:</label>
        <input type="text" name="book_isbn"><br>
        <label for="title">Title:</label>
        <input type="text" name="book_title"><br>
        <label for="author">Author:</label>
        <input type="text" name="book_author"><br>
        <label for="book_quantity">Quantity:</label>
        <input type="number" name="book_quantity"><br>
        <input type="submit" value="Create Book">
    </form>

    <h2>Create Customer</h2>
    <form method="POST" action="">
        <label for="customer_id">Customer ID:</label>
        <input type="number" name="customer_id"><br>
        <label for="customer_first_name">First Name:</label>
        <input type="text" name="customer_first_name"><br>
        <label for="customer_last_name">Last Name:</label>
        <input type="text" name="customer_last_name"><br>
        <label for="customer_email">Email:</label>
        <input type="email" name="customer_email"><br>
        <input type="submit" value="Create Customer">
    </form>


    <h2>Show Books</h2>
    <form method="GET" action="">
        <input type="submit" value="get book">
    </form>
</body>
</html>
