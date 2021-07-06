<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='Stylesheet/style.css'>
    <script src="javascript/main.js" defer></script>
</head>
<body>
    <header>
        <div id="menubar">
            <div id="box1">memory spel</div>
            <div id="box2"><p id="displayCount">0</p><p>Flips</p></div>
            <div id="box3"><button id="resetBTN" onclick="reset()">Reset</button></div>
            <div id="box4"><button id='start' onclick="startGame()">Start the game</button></div>
            <div id="box5"><div class="timer">0 minuten 0 seconden</div></div>
            <div id="scorebox"><p>Score = </p><div id="box6">0</div></div>
            <div><?php $statement = $con->prepare("SELECT * FROM memoryscore ORDER BY MAX(highscore)");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                echo 'Naam: '. $row['naam']. '<br>';
                echo 'Score: '.$row['highscore']. '<br>';
                echo 'Tijd: '.$row['tijd']. '<br>';
            }
            ?>
            
            </div>
        </div>
    </header>
    <main>
        <div id="flex-box">
            <div id="allcards">
                <div class="card" data-cardinfo="card1">
                    <?php
                    $result = $con->query('SELECT * FROM cards WHERE ID = 1');
                    while ($row = $result->fetch()) {
                        echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                        echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card1">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 1');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card2">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 2');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card2">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 2');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card3">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 3');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card3">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 3');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card4">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 4');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card4">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 4');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card5">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 5');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card5">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 5');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card6">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 6');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card6">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 6');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card7">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 7');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card7">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 7');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card8">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 8');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
                <div class="card" data-cardinfo="card8">
                    <?php
                        $result = $con->query('SELECT * FROM cards WHERE ID = 8');
                        while ($row = $result->fetch()) {
                            echo '<img class="cardShow" src="images/' .$row[2].'"</img>';
                            echo '<img class="cardBG" src="images/' .$row[1].'"</img>'; }?>
                </div>
            </div>
        </div>
        <div id="popup">
            <div id="popupscore">
                <h1>Je hebt gewonnen</h1>
                <h2>Sla je score op!</h2>
                    <form action='includes/saveScore.php' method='POST'>
                        <div id="flex_score">
                            <label>Highscore = </label>
                            <input type="text" name="endScore" id="endScore" readonly>
                            <label>Flips = </label>
                            <input type="text" name="endCount" id="endCount" readonly>
                            <label>Time = </label>
                            <input type="text" name="endTime" id="endTime" readonly>
                            <label for="username">Put your username here!</label>
                            <input type="text" name="username" id="username" maxlength="5">
                        </div>
                            <input type="submit" name="saveDB" id="saveDB" value="Save score"></button>
                    </form>
                <button id="resetPopup" onclick="reset()">Reset</button>
            </div>
        </div>
        <div id="popupBG"></div>
    </main>
    <footer></footer>
</body>
</html>