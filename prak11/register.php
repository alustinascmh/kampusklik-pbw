<?php
    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="./register_proccess.php">
        <!-- email -->
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><br>

        <!-- password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>

        <!-- button submit -->
        <input type="submit" value="Register">
    </form>
</body>
</html>