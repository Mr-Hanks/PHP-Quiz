<!-- Collin Hanks C00411997
     INFX 371 Project 2 -->

<?php include 'database.php'; ?>
<?php
$query = "SELECT * FROM questions";
$results = mysqli_query($connection, $query) or die(mysqli_error.__LINE__);
$total = $results->num_rows;
?>

<!DOCTYPE hmtl>
<html lang="en"> 
    <head>
        <title>PHP Tester</title>
        <meta charset="utf-8"/>
        <link href="tester.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP Tester</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test Your PHP Knowledge!</h2>
            <p>This is a multiple choice test to test your knowledge of PHP</p>
            <ul>
                <li><strong>Number Of Questions: </strong> <?php echo $total; ?> </li>
                <li><strong>Type: </strong>Multiple Choice </li>
                <li><strong>Estimated Time: </strong> <?php echo $total * 0.5; ?> minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
            <a href="add.php" class="start">Add Question</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2022, INFX 371 PHP Tester
        </div>
    </footer>
</body>
</html>