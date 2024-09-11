<form action="display.php" method="post" autocomplete="off">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName"><br><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <p>Select a holiday destination:</p>
    <input type="radio" id="beach" name="destination" value="beach">
    <label for="beach">beach</label><br>
    
    <input type="radio" id="country" name="destination" value="country">
    <label for="country">country</label><br>
    
    <input type="radio" id="city" name="destination" value="city">
    <label for="city">city</label><br><br>

    <label for="colour">Select a colour:</label>
    <select name="colour" id="colour">
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
