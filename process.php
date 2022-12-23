<!-- Collin Hanks C00411997
     INFX 371 Project 2 -->

<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    if(!isset($_SESSION['score'])){
        $_SESSION['score']=0;
    }
    if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;

        $query = "SELECT * FROM questions";
        $result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
        $total = $result->num_rows;

        $query = "SELECT * FROM choices WHERE QuestionNO = $number AND Is_correct = 1";

        $result = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
        $row = mysqli_fetch_assoc($result);
        $correct_answer = $row['CID'];

        if($selected_choice == $correct_answer){
            $_SESSION['score']++;
        }

        if($number == $total) {
            header("Location: final.php"); 
        } else{
            header("Location: question.php?n=" .$next);
        }
    }
?>