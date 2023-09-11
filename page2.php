<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    <?php
    // Check if data was submitted from Page 1
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
    } else {
        // Redirect to Page 1 if data is not submitted
        header("Location: index.php");
        exit();
    }
    ?>
    <form method="POST" action="success.php">
        <label for="location">Location:</label>
        <input type="text" name="location" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>
        
        <label for="university">University:</label>
        <input type="text" name="university" required><br><br>
        
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
