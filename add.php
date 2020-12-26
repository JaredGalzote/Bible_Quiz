<?php  include 'db.php';
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

 // First Query for Questions Table

	$query = "INSERT INTO questions (";
	$query .= "question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection,$query);
	
	//Validate First Query
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
			


				//Second Query for Choices Table
				$query = "INSERT INTO options (";
				$query .= "question_number,is_correct,coption)";
				$query .= " VALUES (";
				$query .=  "'{$question_number}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($connection,$query);
				// Validate Insertion of Choices

				if($insert_row){
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);
					
				}

			}
		}
		$message = "Question has been added successfully";
	}

	




}

		$query = "SELECT * FROM questions";
		$questions = mysqli_query($connection,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;
		

?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
			<div class="container">
			<div id="home" class="flex-column flex-center">
			<h1>PHP Quizer</h1>
				<p>Add A Question</p>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>
								
				<form method="POST" action="add.php">
				<table class="score_table">	
						<tr>
							<td class="text-left" class="text-left"><label>Question Number:</label></td>
							<td class="text-left" class="text-left"><input class="b" type="number" name="question_number" value="<?php echo $next;  ?>"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Question Text:</label></td>
						<td class="text-right"><input class="a" type="text" name="question_text"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Choice 1:</label></td>
						<td class="text-right"><input class="b" type="text" name="choice1"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Choice 2:</label></td>
						<td class="text-right"><input class="b" type="text" name="choice2"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Choice 3:</label></td>
						<td class="text-right"><input class="b" type="text" name="choice3"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Choice 4:</label></td>
						<td class="text-right"><input class="b" type="text" name="choice4"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Choice 5:</label></td>
						<td class="text-right"><input class="b" type="text" name="choice5"></td>
						</tr>
						<tr>
						<td class="text-left"><label>Correct Option Number</label></td>
						<td class="text-right"><input class="b" type="number" name="correct_choice"></td>
						</tr>
				</table>
						<input type="submit" name="submit" value ="submit" class="start-btn">
				</form>
				<a href="index.php" class="button">Return</a>
			</div>
			
			</div>

	</main>
</body>
</html>