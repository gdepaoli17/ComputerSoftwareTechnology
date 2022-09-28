<?php include('includes/database.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
<body>
    <div>
        <h1>Welcome to the Login Page</h1>
        <hr>
        <form action="includes/login.php" method="POST">

            <label for="">User Name: </label> <input type="text" name="userName" required><br>
            <label for="">Password: </label> <input type="password" name="password" required><br>
            <hr>
            <button type="submit" name="submit">Log In</button>

        </form>
        <hr>
        <nav>
            <a href="index.php">Landing Page</a>
        </nav>
        
    </div>

</body>
</html>