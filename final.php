<?php 
include 'db.php';
session_start();
$total_score = $_SESSION['score'] * 10;
$name = empty($_SESSION['name']) ? 'No name' : $_SESSION['name'];
	$query = "INSERT INTO high_scores (";
	$query .= "name, score )";
	$query .= "VALUES (";
	$query .= " '{$name}','{$total_score}' ";
	$query .= ")";

	$result = mysqli_query($connection,$query);
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
			<h1>Bible Quiz</h1>
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']*10; ?>  </p>
				<?php 
				unset($_SESSION['score']); 
				unset($_SESSION['name']); 

				?>
				<br>
				 <a href="highscore.php" id="highscore-btn" class="btn"> View High Scores<i class="fas fa-crown"></i></a>
				<a href="index.php" class="btn">Return to home page</a>
			</div>
	</div>

</body>
</html>