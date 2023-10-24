<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

		$language = "PHP";

		if ($language == "Javascript") {
			echo "I love Javascript";
		} elseif ($language == "Python") {
			# code...
			echo "I love python";
		} else {
			echo "I love php";
		}
		echo "<br/>";
		for($number = 1; $number <= 10; $number++){
			echo "$number";
		}

		echo "<br/>";
		$operator = 'e';
		switch ($operator) {
			case '+':
				# code...
				echo "Addition";
				break;
			case '-':
				echo "Subtraction";
				break;
			case '-':
				echo "Subtraction";
				break;
			case '-':
				echo "Subtraction";
				break;
			case '*':
				echo "multiplication";
				break;
			case '/':
				echo "division";
				break;
			case '%':
				echo "modulo";
				break;
			default:
				# code...
				echo "enter a basic operation";
				break;
		}
		?>

 




	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>