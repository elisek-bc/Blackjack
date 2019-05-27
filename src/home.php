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
    /*private $score = '';

    public function __construct($turn){
        $this->score = $turn
    };
        
    public function hit($amount) {
        $amount .= rand(1,11)
    };

    public function stand() {
        
    };

    public function surrender(){

    };*/
}

/*$player = new Blackjack ('player');
$dealer = new Blackjack ('dealer');*/
?>
<div class="wrapper d-flex align-items-center">
<div>
    <h1> Play Blackjack</h1>
    <h2> What do you want to do? </h2>
</div>
<div class="row m-auto">
    <div class="col-12 d-flex flex-column">
        <form method="POST" action="game.php" class="">
            <input type="radio" name="choice" value="hit" id="hit">
                <label for= "hit">hit</label>
            <input type="radio" name="choice" value="stand" id="stand">
                <label for= "stand">stand</label>
            <input type="radio" name="choice" value="surrender" id="surrender">
                <label for= "surrender">surrender</label>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</div>
</div>
</body>
</html>