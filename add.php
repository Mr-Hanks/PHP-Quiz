<?php include 'database.php'; ?>
<?php
if(isset($_POST['submit'])){
    $questionNumber = $_POST['QuestionNO'];
    $questionText = $_POST['QText'];
    $correct_choice = $_POST['correct_choice'];
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];
    

    $query = "INSERT INTO `questions` (QuestionNO, QText) VALUES ('$questionNumber', '$questionText')";
    $insert_row = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);

    if ($insert_row){
        foreach ($choices as $choice => $value){
            if($value != ''){
                if($correct_choice == $choice){
                    $Is_correct = 1;
                } else{
                    $Is_correct = 0;
                }

                $query = "INSERT INTO `choices` (QuestionNO, Is_correct, Qchoices) VALUES ('$questionNumber', '$Is_correct', '$value')";
                $insert_row = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
                if ($insert_row){
                    continue;
                } else{
                    die($mysqli_error.__LINE__);
                }
            }
        }
        $message = "Question added successfully";
    }
}
    $query = "SELECT * FROM questions";
    $results = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
    $total = $results->num_rows;
    $next = $total +1;
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
            <h2>Add A Question</h2>
            <?php if(isset($message)){
                echo "<p>".$message."</p>";
            } ?>
            <form method ="post" action="add.php">
                <p>
                    <label>Question Number</label>
                    <input type="number" name="QuestionNO" value="<?php echo $next; ?>">
                </p>
                <p>
                    <label>Question</label>
                    <input type="text" name="QText">
                </p>
                <p>
                    <label>Choice #1</label>
                    <input type="text" name="choice1">
                </p>
                <p>
                    <label>Choice #2</label>
                    <input type="text" name="choice2">
                </p>
                <p>
                    <label>Choice #3</label>
                    <input type="text" name="choice3">
                </p>
                <p>
                    <label>Choice #4</label>
                    <input type="text" name="choice4">
                </p>
                <p>
                    <label>Choice #5</label>
                    <input type="text" name="choice5">
                </p>
                <p>
                    <label>Correct Choice Number</label>
                    <input type="number" name="correct_choice">
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit">
                    <a href="index.php">Home</a> 
                </p>
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