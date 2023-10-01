<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Form Validation</title>
</head>
<body>
	<!-- The validation_errors function returns error messages sent back by 
	the validator. If there are no messages, it returns an empty string.-->

	<?php if (isset($validation)) { ?>
		<div class="text-danger">
			<?php echo $validation->listErrors() ?>
		</div>
	<?php } ?>

	<!-- form_open function create a form where on submit the Login2 controller is loaded and the index method is executed. -->

	<?php echo form_open('Login2'); ?>
		<h5>Username</h5>
		<input type="text" name="username" value="" size="	50" />
		<h5>Password</h5>
		<input type="text" name="password" value="" size="50" />
		<h5>Password Confirm</h5>
		<input type="text" name="passconf" value="" size="50" />
		<h5>Email Address</h5>
		<input type="text" name="email" value="" size="50" />

		<div><input type="submit" value="Submit"></div>
	</form>

</body>
</html>