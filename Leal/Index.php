<?php 
	include_once('connection.php');
	$error = "";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$rs = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
		if($rs->num_rows > 0){
			header("Location: home.php");
			exit();
		}else{
			$error = true;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.17/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- FontAwesome Icons -->

</head>

<body>
      <div class="form-card">
        <h1>Login</h1>

        <?php if($error): ?>
            <div class="alert alert-danger">
                Incorrect Credentials!
            </div>
        <?php endif; ?>

        <form id="loginForm" action="index.php" method="post">
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="username" placeholder="Enter Username" class="form-control" required>
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
            </div>
            <button type="submit" name="button" class="btn mb-3">Login</button>
            <p class="text-center">You dont have account yet? <a href="">Register</a></p>
            <hr>
            <p>or</p>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.17/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
<style>
body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ45UNvw9814xW1iRSx9HnS-venpRLKJLYrOg&s');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Arial', sans-serif; /* Added a default font */
  color: #333; /* Dark gray text for better contrast */
}

/* Form Card Styles */
.form-card {
  background-color: rgba(255, 255, 255, 0.8); /* Slightly opaque white background */
  padding: 40px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 400px;
  margin: 50px auto; /* Center the form horizontally */
  text-align: center;
  align-content: center;
}

.form-card h1 {
  margin-bottom: 30px;
  color: #333; /* Dark gray heading */
}

.form-card p {
  color: #555; /* Lighter gray paragraph text */
  margin-bottom: 20px; /* Added margin for better spacing */
}

.form-card a {
  color: #007bff; /* Blue link color */
  text-decoration: none;
}

hr {
  border-top: 1px solid #ccc; /* Subtle gray horizontal rule */
  margin: 20px 0; /* Added margin for better spacing */
}

/* Input Fields */
.form-card .form-control {
  border-radius: 5px;
  padding: 12px 15px;
  border: 1px solid #ccc; /* Lighter gray border */
  margin-bottom: 15px;
  transition: border-color 0.3s ease;
  width: 100%; /* Ensure inputs take full width */
  box-sizing: border-box; /* Include padding and border in element width */
}

.form-card .form-control:focus {
  border-color: #007bff; /* Blue border on focus */
  box-shadow: 0 0 3px #007bff; /* Blue box shadow on focus */
  outline: none; /* Remove default focus outline */
}

/* Buttons */
.form-card .btn {
  background-color: #007bff; /* Blue button */
  color: white;
  border: none;
  border-radius: 5px;
  padding: 12px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
  width: 100%; /* Ensure buttons take full width */
}

.form-card .btn:hover {
  background-color: #0069d9; /* Darker blue on hover */
  transform: scale(1.01);
}

.form-card .btn:focus {
  opacity: 0.9;
  outline: none;
}

/* Input Groups */
.form-card .input-group-text {
  background-color: #007bff; /* Blue input group text */
  color: white;
  border-radius: 5px 0 0 5px;
  padding: 11px;
}

.input-group-text i {
  padding: 5px;
}

.form-card .input-group .form-control {
  border-left: none;
  border-radius: 0 5px 5px 0; /* Corrected border-radius */
  padding-left: 12px;
}

.form-card .input-group .form-control::placeholder {
  padding-left: 2px;
}

/* Error messages */
.alert-danger {
  background-color: #f8d7da;
  border-color: #f5c6cb;
  color: #721c24;
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 5px;
}
</style>

</body>
</html>