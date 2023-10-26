<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo floor(rand(0, 1)) . "<br>";

$string = "I love Jesus";
echo strtoupper($string) . "<br>";

$myArray = [43, 435, 223, 235, 923, $string];

$found = in_array($string, $myArray);
if($found) {
	echo "Wow";
} else {
	echo "Oh no";
}
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>