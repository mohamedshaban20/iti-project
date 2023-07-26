<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Confirmation</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $address = $_POST["address"];
        $country = $_POST["country"];
        $gender = $_POST["gender"];
        $skills = implode(", ", $_POST["skills"]);
        $username = $_POST["username"];
        $password = $_POST["password"];
        $department = $_POST["department"];
        $security_code = $_POST["security_code"];

        if ($security_code !== "PHP123") {
            die("Invalid security code. Please try again.");
        }
    ?>
        <h2>Thank You, <?php echo ($gender === "male") ? "Mr." : "Miss"; ?> <?php echo $first_name . " " . $last_name; ?></h2>
        <p>Please review your information: </p>
        <p><strong>Name:</strong> <?php echo $first_name . " " . $last_name; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Your skills:</strong> <?php echo $skills; ?></p>
        <p><strong>Country:</strong> <?php echo $country; ?></p>
        <p><strong>Department:</strong> <?php echo $department; ?></p>
    <?php
    } else {
        echo "<h2>Form submission failed.</h2>";
    }
    ?>

</body>
</html>