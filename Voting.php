<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            padding: 8px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Voting Eligibility Checker</h2>
        
        <form method="post" action="">
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>" required>
            <button type="submit">Check Eligibility</button>
        </form>
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $age = $_POST["age"];

                if ($age >= 18 && $age <= 130) {
                    echo "<p>You are eligible to vote.</p>";
                } else if ($age > 130 || $age < 0) {
                    echo "<p>Invalid age.</p>";
                } else {
                    echo "<p>You are not eligible to vote.</p>";
                } 
            } 
        ?>
    </div>
</body>
</html>
