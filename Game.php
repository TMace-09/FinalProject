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
	<script src="plotly-latest.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
   	<script src="script.js"></script>
	<link rel="stylesheet" href="./Style.css">
	<link rel="stylesheet" href="./Style3.css">
	<link rel="stylesheet" href="ballpitStyles.css">
  </head>
<!-- Body -->
<body onload="loading()">
    <!-- Dealing with the header -->
      <header>	
        <!-- Logo/Title -->
        <div class="logo">
          <center><font size="6">Have Fun!!</font></center>
        </div>
      </header>
	   <!-- Middle Content -->
      <section>
        <!-- Menu Half -->
        <nav>
          <!-- Side Nav -->
          <div class="sidenav">
			<a href="Main.php">Main</a>
		    <a href="Game.php?v=0&u=<?php print $u; ?>" id="one">K-2</a>
            <a href="Game.php?v=1&u=<?php print $u; ?>" id="two">3-5</a>
            <a href="Game.php?v=2&u=<?php print $u; ?>" id="three">6-8</a>
          </div>
        </nav> 
        <!-- Content Half -->
        <article>
			<!-- Game Details -->
			<?php
			// if u isn't a string
			if (!(is_string($u)))
			{
				// page title
				echo '<center><h6><font size="5">Hmm, this should not be possible.</font></h6></center>';
				// run an error
				echo '<p>!!! NO NAME ERROR !!!</p>';
			}
			// if it is a usable name
			else
			{
				// page title
				echo '<center><h6><font size="5">Good Luck, ' . $u . '</font></h6></center>';
				// say hello to the user
				echo '<div id="preface">';
				if ($v == 0)
				{
					// add a little story to engage
					echo '<br/><p>Hi, Welcome to the K-2 Game Mode. Here you will be learning about the spread of something through groups. The Red balls are people that know about
					a secret and the green balls are people the do not know the secret. And it is a big secret, so everyone that knows it is talking about it. Be sure to watch
					what happens. If you can answer some questions, then you can freely play around</p>';
				}
				else if ($v == 1)
				{
					// advance the story to keep invested
					echo '<br/><p>Welcome, students of 3-5! Things have gotten a little more serious in the world of our bouncing balls. Things have evolved past simple secrets and 
					our denizens are now dealing with an epidemic. It is up to you to help them find our how to stop the spread and curb the infected</p>';
				}
				else
				{
					echo '<p>!! ~~ !! In development !! ~~ !!</p>';
				}
				echo '</div>';
				echo '<br/>';
				
				// run a start button
				echo '<div id="start">';
				echo '<p><button onclick="start()" id="begin">Start?</button></p>';
				echo '</div>';
				// text to be filled in
				echo '<p id="demo"></p>';
				// question button
				echo '<div id="question">';
				echo '<p><button onclick="blurb()" id="quest">Question?</button></p>';
				echo '</div>';
			}
			?>
			<br/>
			<!-- House the game's details -->
			<div id="ballpitPanel"></div>
			<div id="chartPanel">
				<!--Buttons to try to start and stop the constant update -->
				<!--Div below is where the graph is displayed -->
				<div id="chart" style="width:100%"></div>
			</div>


			<!--<script src="test.js"></script>-->
			<script src ="js/displayPanel.js"></script>
			<script src="js/ballpitElements.js"></script>
			<script src="js/ballpit.js"></script>
			<script src="js/chart.js"></script>
			<script src="js/interaction.js"></script>
			<br/>
			<br/>
			<!-- Hidden variable so javascript can access it -->
			<input type="hidden" id="hide" name="hide" value="<?php print $v; ?>">
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
