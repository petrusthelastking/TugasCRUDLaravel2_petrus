<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="email"], input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form dan menerapkan htmlspecialchars
        $email = $_POST['email'];
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        // Memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='result'>Email yang telah diolah: " . $email . "</div>";
        } else {
            // Tangani input yang tidak valid
            echo "<div class='result'>Email tidak valid!</div>";
        }
    }
    ?>
</body>
</html>
