<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    <form method="post" action="confirmation.php" target="_blank">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" rows="4" cols="50" required></textarea><br><br>

        <label for="country">Country:</label>
        <select name="country" required>
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            
        </select><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="female" required>Female<br><br>

        <label>Skills:</label>
        <input type="checkbox" name="skills[]" value="PHP">PHP
        <input type="checkbox" name="skills[]" value="MySQL">MySQL
        <input type="checkbox" name="skills[]" value="JS">JS
        <input type="checkbox" name="skills[]" value="postgreeSQL">PostgreSQL<br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <label for="department">Department:</label>
        <input type="text" name="department" value = "Open Source" required><br><br>

        <label for="security_code">Insert the code in the box below:</label>
        <input type="text" name="security_code" required><br>
        <small>(Enter "PHP123" as the security code)</small><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>