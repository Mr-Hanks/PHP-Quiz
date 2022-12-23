<!-- Collin Hanks C00411997
     INFX 371 Project 2 -->

<?php session_start() ?>
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
            <h2>You're Done!</h2>
            <p>Congrats! You have completed the test</p>
            <p>Final Score: <?php echo ($_SESSION['score']); ?></p>
            <a href="question.php?n=1" class="start">Start Again</a>
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
<?php session_destroy(); ?> 
