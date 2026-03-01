<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9; /* soft light gray */
            display: flex;
            justify-content: center;
            padding-top: 60px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            width: 420px;
            border-top: 4px solid #2c3e50; /* professional dark blue */
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
            font-weight: 600;
        }

        label {
            font-weight: 600;
            color: #34495e;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 6px 0 18px 0;
            border: 1px solid #dcdde1;
            border-radius: 5px;
            font-size: 14px;
            transition: 0.2s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #2c3e50;
            outline: none;
            box-shadow: 0 0 4px rgba(44,62,80,0.2);
        }

        input[type="submit"] {
            width: 100%;
            background-color: #2c3e50; /* dark professional blue */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #1a252f;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #2c3e50;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>Student Registration Form</h2>

    <form action="students.php" method="POST">
        <label>Registration No:</label>
        <input type="text" name="regno" placeholder="Enter Registration No" required>

        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter Name" required>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="submit" name="submit" value="Register Student">
    </form>

    <a href="students.php" class="back-link">← Back to Students List</a>
</div>

</body>
</html>