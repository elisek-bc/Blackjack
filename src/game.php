<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Functions PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,700|Ovo&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<?php
Class Blackjack {
    public $score = '';

    public function __construct(){
        if(!$_SESSION['score']) {
            $this->score = 0;
        }
        else {
            $this->score = $_SESSION['score'];
        }
    }
        
    public function hit() {
        $rand = rand(1,11); // makes a random number between 1-11
        $this->score += $rand; // adds random number to score (made in session)
        $_SESSION['score'] = $this->score; // stores it again in session
    }

    public function stand() {

        //probleem: ex. dealer score is 13, dan zal de while functie nog eens doorgaan.
            //ex. dealer score is 18, dan word de dealer hit niet meer uitgevoerd
            
        echo "Your score is: ".$_SESSION['score'];
        $playerScore = $_SESSION['score']; // om later te vergelijken
        unset($_SESSION['score']);
        // resets the score on zero and restarts with 0. 

        while ($_SESSION['score'] < 15){
            $this->hit();
        }

        if ($this->score > 21 || ($playerScore <= 21 && $playerScore > $this->score)){
            echo "You won!";
        } else if ($playerScore > 21 || ($this->score <= 21 && $this->score > $playerScore) ){
            echo "Dealer won!";
        } else if ($this->score == $playerScore){
            echo "It's a tie, but official rules say that the dealer wins!";
        }
    }

    public function surrender(){
        //unset($_SESSION['score']);

        var_dump($_SESSION['score']);
        unset($_SESSION['score']);
        $this->score = 0;
        echo "<br>";
        var_dump($_SESSION['score']);
        var_dump($this->score); 

        while ($_SESSION['score'] < 15){
            $this->hit();
        }
        echo "<br>";
        echo "The dealer has:". $_SESSION['score'];
        echo "Sorry,dealer won!";
    }
}
?>

</body>
</html>