
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$name = ["kayode", "samuel", "Adeyemi"];
	if (!in_array($username, $name )) {
		echo "Sorry, you are not allowed!";
	} else {
		echo "You are Welcome";
	}
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>
	<form action="6.php" method="post">
		<input type="text" name="username" id="" placeholder="Enter a username">
		<input type="password" name="password" id="" placeholder="Enter a password">
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>