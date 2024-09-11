<!DOCTYPE html>
<html>

<head>
    <title>Simple Form</title>
</head>

<body>
    <form method="POST" action="post.php">
        <label for="firstname">Name:</label>
        <input type="text" id="firstname" name="firstname" required>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>
        
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>