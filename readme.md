# INTRODUCTION TO PHP

## SERIES OF EXERCISES
You can find all exercises in the folder 'src'.

### Exercise 1: Global Supervariables

#### What?
##### Scope

1. Create a file setup.php
2. Create a file result.php
3. Use $_POST and $_GET to send data* from setup.php to result.php
4. On result.php show this data* to the user:<br/>
    - Show what data is in which variable <br/>
    - Make it look decent (use css) -> Don't spend too much time either !

The data that needs to be sent, for $_POST: top 5 tv shows, top 5 movies, for $_GET: Favourite country,worst movie ever seen Data for any bonus objectives can be anything you want (maybe stick with the theme ;) )

##### Bonus objectives

1. Use as many of the superglobal variables as you can
2. Put each variable's values in a tab (bootstrap tabs for example) on the result page
3. Loop through the data and post it in a table (as key => value)

##### Super bonus objectives

1. Save all data from each variable into an object with the variable name as object name and its keys => values as properties
2. Save all objects into a larger object called data_object
3. Save this data_object into the $_SESSION
4. Create a third page called superdata.php on which you display the data_object as an indented list of keys => values of the properties and child objects

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise started on 13th of May 2019; and is part of a series of exercises on PHP. All the exercises together have a 2-3 week deadline.

#### Difficulties
1. It's hard to get started with PHP like this... I first went through a whole other basic course with syntax before I started with this.
2. The link between documents, what to place where is confusing.
3. Objects in objects we're kinda hard to address.

### Exercise 2: Loops

#### What?
1. Create a file loop.php
2. At the top of the file, create an array like the one below (with at least 8 shows in it)
3. Loop through the array posting the rating and the tv show's name in a table row
4. Now make the tv-show name clickable and link it to a google search about that tv show
5. Lastly, instead of the number of the rating of this tv show, make a loop inside the current loop to give the number of stars instead of rating (use icons)

<b>EXTRA: LOTTERY EXERCISE</b>

1. Create a lottery machine. with 3 emoji's.
2. Create index.php and a lottery.php file
3. When the player wins congratulate him and ask him if he wants to play again.
4. Choose one emoji that wins and two that lose
5. Here are the emoji's: pizza-hamburger-fries

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise started on 15th of May 2019; and is part of a series of exercises on PHP. All the exercises together have a 2-3 week deadline.

#### Difficulties
1. This exercise wasn't that difficult. I managed to finish this quite quickly.
2. for the lottery machine I tried putting more effort in my CSS to make it look prettier, because the exercise itself was finished in 2 hours as well.

### Exercise 3: Debugging

#### What?
This is just a bunch of information to read through before continueing in the course.

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise started on 16th of May 2019; and is part of a series of exercises on PHP. All the exercises together have a 2-3 week deadline.

#### Difficulties
This is just a reading exercise zo there were no real difficulties here.

### Exercise 4: Manipulation

<b>STRING MANIPULATION</b>
#### What?

1. Create a nickname.php, on it create a form, with the title Cool NickName Generator.
This form should have one text input and a button, which can only be pressed if more than one character is filled into the field. When you fill in the field and submit the form, take the filled in username and go through a series of steps dictated below:
- Turn the name around
- Capitalize it
- Turn the name back around
- Add -- to the front and back of the name
- Add x to the front of the name
- Add two to four random characters (A-Z, a-z, 0-9) in front of the name
- Wrap those random characters with blocked parentheses []
- Capitalize one more random character in the name (if the character is already capitalized, it should be de-capitalized)

2. Bonus objective

- Give the nickname a gradient by wrapping each letter in a span with a different color style attribute to it


#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise is a part of a series of PHP exercises with a 2-3 week deadline. I've worked on this exercise part 'string manipulation' on 17th of May 2019. 

#### Difficulties
The exercise was do-able but I did not manage to do the bonus objective.

<b>OBJECT/ARRAY MANIPULATION</b>
#### What?

1. Create an array, an associative array and an object in home.php.
2. What are the differences between an array, an associative array and an object? (*)
3. Write a for-loop that adds an item to all of the above.
4. Write an if-statement that has a 20% chance to edit a random item of one of the above.
5. Put this if statement in a loop so every array/object has a random chance of having a random item changed
6. Divide the array in half (if uneven items half-1, unless half-1 makes it empty)
7. Remove the last item of the associative array
8. Add the arrays to the object as arr1 and arr2
9. Loop through the associative array adding all items to the object as key => value
10. Save the object in the $_COOKIE superglobal
11. Find a way to print this final object on the homepage, in an easily readable way

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise is part of a series of exercises on PHP with a 2-3 weeks deadline. I worked on this part of th exercise (Array manipulation) from 20th of May 2019, till 22th of May 2019.

#### Answer to point 2
- An array can hold many values under a single name, and you can access the values by referring to an index number.
- An associative array has named keys with values, instead of just array index to address something you can also use the key name. For example ("Peter"=>"50","Jan=>"26",...) If you want Peters age you can just say $array['Peter'] to get it.
- An object is an individual instance of the data structure defined by a class. We define a class once and then make many objects that belong to it. Objects are also known as instances. (don't really get this for now...)

#### Difficulties
1. Adding an object to a cookie, and setting the cookie took me some time. I searched online a lot to find a solution, but eventually it worked out.
2. Part 4, where you needed to have a 20 procent chance to change something in one of the arrays was also tricky. I figured out the 20 procent quickly, but just changing something in 1 of the arrays and not in all of them took me a while.

### Exercise 5: Functions

#### What?
1. Create a home.php file
2. Create a functions.php file
3. Create a security.php file
4. On your home.php create three boxes (next to each other, but bordered off) and give all of them one button:
- Generate object
- Revert object
- Get a nickname (Give this box also an input field to type the nickname)
5. Require security.php in your home.php file
6. Include functions.php in your home.php file
7. In your functions.php, create three functions:
- nickname_generate(), ask for the parameter nickname in it, and use this parameter to do what you did in the string manipulation exercise
- object_generate(), this does not take any parameters, but returns the object
- object_revert(), this function should either take the object from the previous function (object_generate()) if it's passed to it as a parameter or create the object at the start if it wasn't passed
- It should then do the following:
    - it takes both halves of the original array out of the object and combines them back into one array
    - it takes all the properties that the associative array gave to the object and puts them back into the associative arrays
    - make sure that all the things you just put back into their original forms, you also remove from the object
    - it prints out an easy-to-read version of all items on the page
8. In security.php, write an HTML form that asks the user whether they are a bot from the future coming to exterminate the human race and are just here for a cool nickname
9. If they answer yes, just give them back a nickname from the nickname generate function
10. If they answer no, and only then, they can see the home.php page, so the user is not to see the home.php page until they answered no on this form.

#### Contributors?
I, Elise, am the only contributor to this project.

### Timing
This exercise is a part of a series of PHP exercises. I started on this part on 22th of May 2019.

### Difficulties
1. I skipped some parts in this exercise because I did not see the use of them.
2. The hierarchy between documents stays confusing to me.

### Exercise 6: Conditions

#### What?
This is just a reading exercise on PHP conditions. I won't make further explanation about this in this readme.
 
This was the text:
Conditions are something we use to make the code decide what to execute/ what to run. From a simple if statement to the more advanced switch statement, knowing when to use which condition, can save you a lot of writing work.

Look up the different conditional statements that exist for PHP and make sure you understand how to work with them. For now let's look at the most important one: if and everything that surrounds it.