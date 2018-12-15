<html>
  <head>
    <meta charset="utf-8">
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="styleS.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
<header>
    	<nav>
    		<div id="logo">
    			<img src="news.png">
    		</div>
    <div id="links">
    	<li><a href="index.php" class="cool-link">Home</a></li>
    	<li><a href="#" class="cool-link">About</a></li>
    	<li><a href="#" class="cool-link">Contacts</a></li>	
    	<div id="logsin">
    		<li><a href="#" class="cool-link">log in</a></li>
    		<li><a href="#" class="cool-link">Sing up</a></li>
    	</div>
    </div>
    	</nav>
</header>
    
    <div id="main">
        <?php
            $conn = mysqli_connect('localhost', 'root', "", 'mydb');
                if(! $conn ){
                   die('Could not connect: ' . mysqli_error());
                }
        ?>
    