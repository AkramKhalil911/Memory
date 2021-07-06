<?php 
include_once 'config.php';

if (isset($_POST["saveDB"])) {
    $username = $_POST['username'];    
    $score = $_POST['endScore'];
    $flips = $_POST['endCount'];
    $time = $_POST['endTime'];

    if(saveScore($con, $username, $score, $flips, $time)){
        header("location:../index.php?opslaan");
    }
}

function saveScore($con, $username, $score, $flips, $time){
    $query = $con->prepare ('INSERT INTO memoryscore (naam, tijd, highscore, flips) VALUES (:username, :endScore, :endCount, :endTime)');

    $query->bindParam(":username", $username);
    $query->bindParam(":endScore", $time);
    $query->bindParam(":endCount", $score);
    $query->bindParam(":endTime", $flips);
    return $query->execute();
}

?>