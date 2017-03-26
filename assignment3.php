<?php
  function __autoload($class) {
  	include './php/'.$class . '.php';
     }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>
    <link rel="stylesheet" href="./css/assignment3.css">
  </head>
  <body>
    <div id="pic">
			<h1> Cat Adoption Center of Western Pennsylvina </h1>
      <h2> Here is a random selection of cats from are kennel.</h2>
      <h5>
        There are 3 types of cats<br/>
        <ul>
          <li> Cat(Unknown Breeding)</li>
          <li> Siamese</li>
          <li>Hairless(Allgery Free)</li>
        </ul>
      </h5>
      <?php
        $Kitty[0]= new Cat("Felco", "Male", "Fat", "Sassy", "Loud");
        $Kitty[1] =new Siamese("Raven", "Female", "Skinny", "Ferice", "Silent");
        $Kitty[2] =new Hairless("Fluffy", "Female", "Round", "Silly", "Weird");
        $Kitty[3]= new Cat("Kit", "Male", "Chubby", "Sassy", "Loud");
        $Kitty[4]= new Cat("Toby", "Male", "Chubby", "Cute", "Chatty");
        $Kitty[5] =new Siamese("Garfeild", "Male", "Fat", "Drama Queen", "Silent");
        $Kitty[6] =new Siamese("Tommy", "Male", "Skinny", "Ferice", "Silent");
        $Kitty[7] =new Hairless("Beth", "Female", "Round", "Silly", "Soft");
        $Kitty[8] =new Hairless("Dasiy", "Female", "Slim", "Snuggly","Artculate");
        $Kitty[9] =new Cat("Tigger", "Female", "Round", "Chatty", "Loud");
        $Kitty[10] =new Cat("Leo", "Male", "Moderate", "Sassy", "Quite");
        $i=0;
        ?>
      <ol>
        <?php
          $mx= rand(2,10);
          for($i=0; $i<=$mx; $i++){
          	echo "<li> ".$Kitty[$i]->__toString()."<br/>";
          	echo "<ul> <li>";
          	$Kitty[$i]->sunggleLevel();
          	echo "</li> <li>";
          	$time=rand(1,3);
          	$Kitty[$i]->meow($time);
          	echo "<br/> </li> </ul> </li>";
          }
          echo "<br/><br/>";
          ?>
      </ol>
    </div>
    <div id="feat">
      <h1> Featured Cat of the Day</h1>
      <h3> Take me Home today</h3>
      <?php
        $feat=rand(0,$mx);
        if(get_class($Kitty[$feat]) == "Cat"){
        	echo "<img src='./Images/black.jpg'>";
        }elseif (get_class($Kitty[$feat]) == "Siamese"){
        	echo "<img src='./Images/Siamese.jpg'> <br/> <h3> Fun Fact:</h3>";
        	$Kitty[$feat]->funFact();
        }elseif (get_class($Kitty[$feat]) == "Hairless"){
        	echo "<img src='./Images/Hairless.jpg'>";
        }

        get_class($Kitty[$feat]);
        echo "<br/>";
        echo $Kitty[$feat]->__toString();
        echo "<br/><br/>";
        echo "Please Adopt Us!!! And we all purr.<br/>";
        $caatt= clone $Kitty[1];
        $Kitty[0]->purr();
        ?>
    </div>
  </body>
</html>
