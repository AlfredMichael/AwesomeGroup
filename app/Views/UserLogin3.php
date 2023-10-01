<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Form Validation</title>
</head>
<body>

	<!-- form_open function create a form where on submit the Login3 controller is loaded and the index method is executed. -->
	<h1>Form Validation Version 3</h1>

	<?php echo form_open('Login3'); ?>

		<!-- Set value of field to that entered - saves data input in field ----set_value() if validation has occurred- display error message for the field ---getError()-->

		<h5>Username</h5>

		<input type="text" name="username" value="<?=set_value('username');?>" size="50" />
		<?php if(isset($validation)){echo $validation->getError('username');} ?>


		<h5>Email Address</h5>

		<input type="text" name="email" value="<?=set_value('email'); ?>" size="50" />
		<?php if(isset($validation)){echo $validation->getError('email');} ?>


		<h5>Password</h5>

		<input type="text" name="password" value="<?=set_value('password');?>" size="50" />
		<?php if(isset($validation)){echo $validation->getError('password');} ?>

		<h5>Password Confirm</h5>

		<input type="text" name="passconf" value="<?=set_value('passconf');?>" size="50" />
		<?php if(isset($validation)){echo $validation->getError('passconf');} ?>
	

		<div><input type="submit" value="Submit"></div>
	</form>

</body>
</html>

