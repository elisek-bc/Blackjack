<?php
session_start();
require('game.php');

$player = new Blackjack;
$dealer = new Blackjack;

$_SESSION["player"] = $player; 
$_SESSION["dealer"] = $dealer;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blackjack</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,700|Ovo&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="wrapper d-flex align-items-center">
<div>
    <h1> Play Blackjack</h1>
    <h2> What do you want to do? </h2>
</div>
<div class="row m-auto">
    <div class="col-12 d-flex flex-column text-center">
        <form method="POST" action="" class="">
            <input type="radio" name="choice" value="hit" id="hit">
                <label for= "hit">hit</label>
            <input type="radio" name="choice" value="stand" id="stand">
                <label for= "stand">stand</label>
            <input type="radio" name="choice" value="surrender" id="surrender">
                <label for= "surrender">surrender</label>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    <div class="result">

    <?php
        switch ($_POST['choice']) {
            case 'hit' :
            $player->hit();
                if ($_SESSION['score'] > 21){
                    echo "You lose!";
                    unset($_SESSION['score']);
                } else {
                    echo "Your current score is: " . $_SESSION['score'];
                }
            break;
        
            case 'stand' :
                $player->stand();
            break;
        
            case 'surrender' :
                $player->surrender();
            break;
        
            default: 
            return;
        }
    ?>

    </div>
</div>
</div>
</body>
</html>