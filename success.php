<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>
    <h1>Success</h1>
    <?php
    // Check if data was submitted from Page 2
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        echo "Thank you for filling the form, $name.";
    } else {
        // Redirect to Page 1 if data is not submitted
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>
