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
    $player = new Blackjack ('player');
    $dealer = new Blackjack ('dealer');

    $_SESSION["player"] = $player; 
    $_SESSION["dealer"] = $dealer;

    switch ('choice') {
        case 'hit' :
            hit($amount);
        break;

        case 'stand' :
            stand($amount);
        break;

        case 'surrender' :
            surrender($amount);
        break;

        default: 
        return;
    }
?>

</body>
</html>