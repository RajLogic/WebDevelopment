<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Form</title>
</head>
<body>
    <h2>Image Upload Form</h2>
    <form action="upload_image.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>