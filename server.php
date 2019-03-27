<?php
session_start();
?>
<?php
include 'conn.php';
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
// $db = mysqli_connect('localhost', 'hanorjcg', 'uwanyirigira josepha', 'hanorjcg_hanorwanda');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

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
  $user_check_query = "SELECT * FROM bulk_sms_users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already taken");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already taken");
    }
  }

  // Finally, register user if there are no errors in the form



  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO bulk_sms_users (username, email, password) 
  			  VALUES('$username', '$email', '$password');";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
          exit();

  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
     header('location: index.php?login=username');
           exit();

  }
  if (empty($password)) {
    header('location: index.php?login=password');
          exit();

  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM bulk_sms_users WHERE username='$username' AND password='$password'";
    
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_array($query);
      $email = $row['email'];
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['email'] = $email;
      header('location: login.php');
      exit();
      
    }else {
      array_push($errors, "Wrong username or password ");
    }
  }

}

// Logout
if (isset($_POST['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header('location: index.php?login=username');
    exit();
}

?>