<?php

// v (version) and u (user)
$v = intval(filter_input(INPUT_GET, "v"));
$u = filter_input(INPUT_GET, "u");
// if u doesn't exist, set it to 0
if (!($u))
{
	$u = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
  <head>
    <!-- Page Name -->
    <title>Disease vs Population</title>

    <!-- meta factors -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- My many style sheets and external scripts for some reason -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/interaction.js"></script>
	<link rel="stylesheet" href="./Style.css">
	<link rel="stylesheet" href="./Style3.css">

  </head>
<!-- Body -->
<body>
    <!-- Dealing with the header -->
      <header>	
        <!-- Logo Title -->
        <div class="logo">
          <center><font size="6" id="title">WELCOME</font></center>
        </div>
      </header>
	        <!-- Middle Content -->
      <section>
        <!-- Menu Half -->
        <nav>
          <!-- Side Nav -->
          <div class="sidenav">
			<a href="Main.php">Main</a>
		    <a href="Main.php?v=1&u=<?php print $u; ?>" id="one">K-2</a>
            <a href="Main.php?v=1&u=<?php print $u; ?>" id="two">3-5</a>
            <a href="Main.php?v=1&u=<?php print $u; ?>" id="three">6-8</a>
          </div>
        </nav> 
        <!-- Content Half -->
        <article>
			<!-- Page title-->
			<center><h6><font size="5">WELCOME</font></h6></center>
			<!-- Name Gathering -->
			<?php
			// if name wasn't entered prior to playing the game
			if ($v == 1)
			{
				// tell the player
				echo '<div id="warning"><center><p>REQUEST COULDN\'T BE MADE! NO NAME ENTERED!</p></center></div>';
			}
			// if u isn't a string, ask for a name
			if (!(is_string($u)))
			{
				// name button
				echo '<div id="name">';
				echo '<center>
						<p>Please enter your name!</p>
						<p><button onclick="user()" id="Hi">Name?</button><br/></p>
					  </center>';
				echo '</div>';
				// fillable text
				echo '<center><p id="demo"></p></center>';
			}
			// if it is a string, say Hi, to the player
			else
			{
				echo 'Hi ' . $u . '!';
			}
			
			// some general text explaining the code's functionality and existence
			echo '<br/>';
			echo '<br/>';
			echo '<center><h6><font size="4">What is this?</font></h6></center>';
			echo '<br/>';
			echo '<p>This website is a web game about how things spread.</p>';
			echo '<br/>';
			echo '<p>As many know, this is a topic of increasing amounts of public notice. Even, after the 2020 Global Pandemic has concluded, this is a topic
			that will remain relevant for the rest of time. As such, it is important that people have access to the proper tools to learn and understand as much about
			events like this</p>';
			echo '<br/>';
			echo '<center><h6><font size="4">How is the game played?</font></h6></center>';
			echo '<br/>';
			echo '<p>How does any game start? The player needs to give their name. After that, they can select one of the tabs on the left that are fitting of their grade level.
			This will result in the game loading a version proper for where they are academically. After that, the player will be asked a series of questions. Upon having proven
			their aptitude with infectious growth, the player is granted full control of the game elements to freely experment and learn of their own volition.
			One cannot properly learn unless they hunt the knowledge themselves. </p>';
			
			?>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
        </article>
      </section>



</body>
</html>
