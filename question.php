<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
 	if(isset($_GET['name'])){
 		$_SESSION['name'] = $_GET['name'];
 	}
	
?>
<html>
<head>
	<title>Bible Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<div id="home" class="flex-column flex-center">
			<h1>Bible Quiz</h1>
				<hr>
				<p class="question"><?php echo $question['question_text']; ?> </p>
				<form method="POST" action="process.php" class="form">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<label class="radio"><li class="inputGroup"> 
							
							<input type="radio" name="choice" id="radio<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" required>
							<label for="radio<?php echo $row['id']; ?>"><?php echo $row['coption']; ?></label>
							
						</li></label>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit" class="start-btn">

				</form>
				</div>
	</div>
</body>
</html>