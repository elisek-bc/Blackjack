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
<?php
Class Blackjack {
    private $score = ''

    public function __construct($turn){
        $this->score = $turn;
        
    public function hit($amount) {
        $amount .= rand(1,11)
    }

    public function stand() {
        
    }

    public function surrender(){

    }
}

$player = new Blackjack ('player');
$dealer = new Blackjack ('dealer');
?>
<form method="POST" action="game.php">
    <input type="radio" name="choice" value="hit">
    <input type="radio" name="choice" value="stand">
    <input type="radio" name="choice" value="surrender">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>