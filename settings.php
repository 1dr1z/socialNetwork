<?php 
include("includes/header.php");
include("includes/form_handlers/settings_handler.php");
?>

<div class="main_column column">

	<h4>Account Settings</h4>
	<?php
	echo "<img src='" . $user['profile_pic'] ."' class='small_profile_pic'>";
	?>
	<br>
	<a href="upload.php">Upload new profile picture</a> <br><br><br>

	Modify the values and click 'Update Details'

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	?>

	<form action="settings.php" method="POST">
		<label class="label-settings" for="settings_input">First Name: </label>
		<input class="input-settings" type="text" name="first_name" value="<?php echo $first_name; ?>" id="settings_input">
		<label class="label-settings" for="settings_input_last_name">
			Last Name: 
		</label>
		<input class="input-settings" type="text" name="last_name" value="<?php echo $last_name; ?>" id="settings_input_last_name">
		<label class="label-settings" for="settings_input_acc">
			Email:
		</label>
		 <input class="input-settings"  type="text" name="email" value="<?php echo $email; ?>" id="settings_input_acc">

		<?php echo $message; ?>

		<input type="submit" name="update_details" id="save_details_acc" value="Update Details" class="info settings_submit"><br>
	</form>

	<h4>Change Password</h4>
	<form action="settings.php" method="POST">
		<label class="label-settings" for="settings_input_old">
			Old Password:
		</label>
		 <input class="input-settings" type="password" name="old_password" id="settings_input_old">
		 <label class="label-settings" for="settings_input_new">
			 New Password:
		 </label>
		 <input class="input-settings" type="password" name="new_password_1" id="settings_input_new">
		<label class="label-settings" for="settings_input_change_passw">
			New Password Again:
		</label>
		 <input class="input-settings" type="password" name="new_password_2" id="settings_input_change_passw">

		<?php echo $password_message; ?>

		<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br>
	</form>

	<h4>Close Account</h4>
	<form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit">
	</form>


</div>