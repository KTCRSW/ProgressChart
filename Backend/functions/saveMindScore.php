<?php

    session_start();
    include '../db/connect.db.php';

    $getData = "SELECT * FROM save_studentscore";
    $queryData = $db->query($getData);

    $std_id = $_POST['std_id'];
    $MindScore = $_POST['mindScore'];
    $subjectID = $_POST['subjectID'];
    $teacherID = $_SESSION['UserID'];

    echo $std_id . "<br>";
    echo $MindScore . "<br>";
    echo $subjectID . "<br>";
    echo $teacherID . "<br>";


    $updateScore = "UPDATE save_studentscore SET mindScore = $MindScore WHERE studentID = '$std_id' AND subjectID = '$subjectID'";
    $queryScore = $db->query($updateScore);

    header('location: ../../Frontend/teacher/score_greenAdd.php')



?>