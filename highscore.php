<?php 
	include 'db.php';

	$query = "SELECT * FROM high_scores ORDER BY score DESC limit 10";
 	$result = mysqli_query($connection,$query);
 	$rows =  mysqli_fetch_all($result, MYSQLI_ASSOC);
 	
?>



<html>
<head>
	<title>Bible Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<div id="home" class="flex-column flex-center">
			<h1>High Score<i id="f" class="fas fa-crown"></i></h1>
			<table class="score_table">	
				<thead>
					<tr>
						<th class="text-center">Rank</th>
						<th class="text-left">Name</th>
						<th class="text-center">Score</th>
					</tr>
				</thead>
			<?php
				$rank = 1;
				foreach ($rows as $key => $value) { 
					?>
					<tr>
						<td class="text-center"><?php echo $rank; ?></td>
						<td class="text-left"><?php echo $value['name']; ?></td>
						<td class="text-center"><?php echo $value['score']; ?></td>
					</tr>
			<?php	
					$rank ++;
				}
			?>
			</table>
			<br>
			<a href="index.php" class="button">Return</a>
		</div>
</div>

</body>
</html>
