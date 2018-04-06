<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
	     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="index.php">Sam's PHP Blog</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="blogposts.php">Blog Posts</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="about.php">About</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<hr />
				<div class="row">

		<div class="col-sm-2">
		<ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		   <a class="nav-link" href="members.php"> Blog Members</a>
		    <span class="badge badge-primary badge-pill">14</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		   <a class="nav-link" href="about.php"> About Page</a>
		    <span class="badge badge-primary badge-pill">2</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a class="nav-link" href="story.php"> My Story</a>
		    <span class="badge badge-primary badge-pill">1</span>
		  </li>
		</ul>
		</div>

		<div class="col-sm-10">
			<h2>About me</h2>
			<p>I'm Sam Salvador, a student and an enthusiastic photographer living in Baguio City. I spend my days going to school, working on my photography, and playing games. Being an introvert is a part of my personality because it lets me explore myself. This led to different hobbies like gardening, games, drawing, fish keeping and interior design.</p>
		
	</div>
</div>
		</div>
</body>
</html>