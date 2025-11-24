	<?php
	include('db_connect.php');
	$message = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $username = $_POST['username'];
	    $password = $_POST['password'];

	   
	     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	   $result = mysqli_query($conn, $sql);
	       $check_user = "SELECT * FROM users WHERE username='$username'";
	    $user_result = mysqli_query($conn, $check_user);

	    // Check password only
	    $check_pass = "SELECT * FROM users WHERE password='$password'";
	    $pass_result = mysqli_query($conn, $check_pass);
	    
	    
	    if (mysqli_num_rows($result) > 0) {
		header("Location: welcome.php?user=" . urlencode($username));
		exit();
	    } elseif (mysqli_num_rows($user_result) > 0) {
		$message = "Incorrect password.";
	    } elseif (mysqli_num_rows($pass_result) > 0) {
		$message = "Incorrect username.";
	    } else {
		$message = "Invalid username and password.";
	    }
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
	    <title>Login Page</title>
	    <style>
    body {
        font-family: Arial, sans-serif;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(115deg, #b3e5fc, #e1bee7, #c5cae9, #ffe0f7);
        background-size: 400% 400%;
        animation: liquidFlow 18s ease infinite, ledGlow 6s ease-in-out infinite alternate;
    }

    /* Liquid flowing gradient animation */
    @keyframes liquidFlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* LED ambient glow effect */
    @keyframes ledGlow {
        0% { filter: brightness(100%); }
        100% { filter: brightness(130%); }
    }

    form {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(12px);
        display: inline-block;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.4),
                    0 0 45px rgba(150, 200, 255, 0.4);
        animation: softPulse 5s ease-in-out infinite alternate;
    }

    /* Soft glowing pulse to match LED theme */
    @keyframes softPulse {
        0% { box-shadow: 0 0 25px rgba(255, 255, 255, 0.4); }
        100% { box-shadow: 0 0 45px rgba(175, 215, 255, 0.7); }
    }

    input[type="text"],
    input[type="password"] {
        padding: 10px;
        width: 220px;
        margin: 10px 0;
        border-radius: 6px;
        border: 1px solid #ccc;
        background: rgba(255,255,255,0.9);
    }

    button {
        padding: 10px 25px;
        border: none;
        border-radius: 6px;
        background: linear-gradient(135deg, #4caf50, #66bb6a);
        color: white;
        font-size: 15px;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    button:hover {
        background: linear-gradient(135deg, #43a047, #5cb85f);
        transform: scale(1.05);
    }

    .msg {
        color: red;
        font-weight: bold;
        margin-top: 10px;
    }
</style>

	</head>
	<body>
	    <h2>Login</h2>
	    <form method="POST" action="login.php">
		<label>Username:</label><br>
		<input type="text" name="username" required><br><br>
		
		<label>Password:</label><br>
		<input type="password" name="password" required><br><br>
		
		<button type="submit">Login</button>
		<p class="msg"><?php echo $message; ?></p>
	    </form>
	</body>
	</html>
