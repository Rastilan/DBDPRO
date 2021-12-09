<?php
include('required/connections.php');

// initializing variables
$username = "";
$email    = "";
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user = mysqli_fetch_assoc($result=$con->query("SELECT * FROM UserData WHERE USERNAME='$username' OR EMAIL='$email' LIMIT 1"));
  if(isset($user)){
    if ($user['USERNAME'] === $username) {
        array_push($errors, "Username already exists");
    }
    if ($user['EMAIL'] === $email) {
        array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database

    $query = "INSERT INTO UserData (USERNAME, EMAIL, PASSWORD)
         VALUES('$username', '$email', '$password')";
    mysqli_query($con, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header("location: index.php");
    exit;
  }
}
?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

<form method="post" action="signup.php">

    <?php  if (count($errors) > 0) : ?>
        <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
      </div>
    <?php  endif ?>


  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an account? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
