# Exercise PHP: Blackjack

## Blackjack Rules

- Cards are between 1-11 points.
- Getting more than 21 points, means that you lose.
- Getting 21 points with your first two cards, means you have a blackjack.
- To win, you need to have more points than the dealer, but not more than 21.
- The dealer is obligated to keep taking cards until they have at least 15 points.

## Explanation of exercise

1. Create a class called Blackjack in the file blackjack.php.
2. Add three methods to this class:
    - Hit
    - Stand
    - Surrender
3. <strong>Hit</strong> should add a card between 1-11.
4. <strong>Stand</strong> should end your turn and start the dealer's turn. (Your point total is saved.)
5. <strong>Surrender</strong> should make you surrender the game. (Dealer wins.)
6. Add a property to this class called score. This property should have the value of the player's score at all times.
7. Instantiate the class twice, once for the player and once for the dealer.
8. Create a button on home.php that starts the game when pushed, it should go to game.php.
9. On <strong>game.php</strong> instantiate the Blackjack class twice, insert it into a player variable and a dealer variable
10. Save these instances in the session (you're gonna need them)
11. Use forms to send to the game.php page what the player's action is. (i.e. hit/stand/surrender)
12. Use the class' methods to react to these actions.
13. The final result should be the following:
    - When you hit the server should draw a card between 1-11, and add it to your total score.
    - If you reach >21, then the page should tell you you lost.
    - If you stand before that, the dealer starts drawing cards until he reaches >15.
    - The server then needs to check the difference between your result and that of the dealer.
    - The person with the biggest score (that is still lower than 22) wins the hand (If equal the dealer wins).
    - As a final option: at any point you need to be able to click surrender after which the page tells you you lost and simulates the dealer's score.


## Contributors

I, Elise am the only contributor to this project.

## Timing

This exercise is the last exercise in a series of PHP exercises, with a 2-3 week deadline. I started this exercise on the 24th of May & wish to finish it on the 29th of May at last.

## Difficulties
I really don't get this exercise...