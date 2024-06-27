<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script type="text/javascript" src="js/corrector.js"></script>
</head>
<body>
Prova JS
<form method="POST" action="ajax.php" name="questions" id="questions">
	<?php
		$question1 = new question;
		$question2 = new question;
		$question3 = new question;
		$question4 = new question;
		$question5 = new question;

		$question1->text = "5+2=";
		$question1->name = "question1";
		$question1->response1 = 7;
		$question1->response2 = 5;
		$question1->correctResponse = 7;
		$question1->PrintQuestion();

		$question2->text = "12+2=";
		$question2->name = "question2";
		$question2->response1 = 14;
		$question2->response2 = 19;
		$question2->correctResponse = 14;
		$question2->PrintQuestion();

		$question3->text = "5+2=";
		$question3->name = "question3";
		$question3->response1 = 7;
		$question3->response2 = 5;
		$question3->correctResponse = 7;
		$question3->PrintQuestion();

		$question4->text = "5+2=";
		$question4->name = "question4";
		$question4->response1 = 7;
		$question4->response2 = 5;
		$question4->correctResponse = 7;
		$question4->PrintQuestion();

		$question3->text = "5+2=";
		$question3->name = "question5";
		$question3->response1 = 7;
		$question3->response2 = 5;
		$question3->correctResponse = 7;
		$question3->PrintQuestion();
	?>

	<input type="button" id="submit" value="Controlla test">
	<input type="reset" value="Pulisci test">
</form>
<div class="output" id="output"></div>
</body>
<script src="js/corrector.js"></script>
</html>

<?php

class question{
	public $text;
	public $name;
	public $response1;
	public $response2;
	public $response;
	public $correctResponse;

	//print question text
	public function PrintQuestionText(){
		echo $this->text;
	}

	//print reponse 1
	public function PrintResponse1(){
		echo $this->response1;
	}

	//print reponse 2
	public function PrintResponse2(){
		echo $this->response2;
	}

	//print question text
	public function PrintQuestion(){
		echo $this->text;
		echo "<input type=\"radio\" name=\"". $this->name ."\" value = \"". $this->response1 ."\">" . $this->response1;
		echo "<input type=\"radio\" name=\"". $this->name ."\" value = \"". $this->response2 ."\">" . $this->response2;
		echo "<br>";
	}

	//check if response if correct
	public function Check($response){
		if ($response == $this->correctResponse){
			return true;
		} else {
			return false;
		}
	}
}

function CreateQuestion($questionName, $questionText, $response1, $response2){
	echo $questionText;
	echo "<input type=\"radio\" name=\"".$questionName."\" value = \"". $response1 ."\">";
	echo "<input type=\"radio\" name=\"".$questionName."\" value = \"". $response2 ."\">";
}

?>