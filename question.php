<!-- Collin Hanks C00411997
     INFX 371 Project 2 -->

<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
$number = (int) $_GET['n'];

    $query = "SELECT * FROM questions";
    $result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
    $total = $result->num_rows;

$query = "SELECT * FROM questions WHERE QuestionNO = $number";

    $result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
    $question = mysqli_fetch_assoc($result);

$query = "SELECT * FROM choices WHERE QuestionNO = $number";
    
    $choices = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
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
            <div class="current">Question <?php echo $question['QuestionNO']; ?> of <?php echo $total; ?> </div>
            <p class="question"> <?php echo $question['QText']; ?> </p>
            <form method="post" action="process.php">
                <ul class="choices">
                <?php while($row = mysqli_fetch_assoc($choices)): ?>
                <li><input name="choice" type="radio" value="<?php echo $row['CID']; ?>"><?php echo$row['QChoices']; ?> </li>
                <?php endwhile; ?>
                </ul>
                <input type="submit" value="Submit">
                <input type="hidden" name="number" value="<?php echo $number;?>">
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, INFX 371 PHP Tester
        </div>
    </footer>
</body>
</html>