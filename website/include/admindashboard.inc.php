<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .admin-panel {
            background-color: #fff;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel - Add Transmitter</title>
</head>
<body>
    <div class="admin-panel">
        <h1>Add Transmitter</h1>
        <form action="add_transmitter.php" method="post">
            <label for="transmitter_name">Transmitter Name:</label>
            <input type="text" id="transmitter_name" name="transmitter_name" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            
            <!-- Add more input fields for other transmitter attributes based on your database schema -->
            
            <input type="submit" value="Add Transmitter">
        </form>
    </div>
</body>
</html>
