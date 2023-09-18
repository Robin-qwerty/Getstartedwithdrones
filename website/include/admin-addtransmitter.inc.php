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

            <label for="weight">Weight:</label>
            <input type="text" id="weight" name="weight">

            <label for="buildin-rf">Built-in RF:</label>
            <input type="text" id="buildin-rf" name="buildin-rf">

            <label for="supported-protocols">Supported Protocols:</label>
            <input type="text" id="supported-protocols" name="supported-protocols">

            <label for="frequency">Frequency:</label>
            <input type="text" id="frequency" name="frequency">

            <label for="rf-power">RF Power:</label>
            <input type="text" id="rf-power" name="rf-power">

            <label for="rf-channels">RF Channels:</label>
            <input type="text" id="rf-channels" name="rf-channels">

            <label for="control-distance">Control Distance:</label>
            <input type="text" id="control-distance" name="control-distance">

            <label for="antenna-gain">Antenna Gain:</label>
            <input type="text" id="antenna-gain" name="antenna-gain">

            <label for="operation-voltage">Operation Voltage:</label>
            <input type="text" id="operation-voltage" name="operation-voltage">

            <label for="operation-current">Operation Current:</label>
            <input type="text" id="operation-current" name="operation-current">

            <label for="operating-system">Operating System:</label>
            <input type="text" id="operating-system" name="operating-system">

            <label for="firmware-upgrade-method">Firmware Upgrade Method:</label>
            <input type="text" id="firmware-upgrade-method" name="firmware-upgrade-method">

            <label for="display">Display:</label>
            <input type="text" id="display" name="display">

            <label for="speaker">Speaker:</label>
            <input type="text" id="speaker" name="speaker">

            <label for="battery">Battery:</label>
            <input type="text" id="battery" name="battery">

            <label for="battery-type">Battery Type:</label>
            <input type="text" id="battery-type" name="battery-type">

            <label for="charching">Charging:</label>
            <input type="text" id="charching" name="charching">

            <label for="ports">Ports:</label>
            <input type="text" id="ports" name="ports">

            <label for="bimbal">Bimbal:</label>
            <input type="text" id="bimbal" name="bimbal">

            <label for="module-bay">Module Bay:</label>
            <input type="text" id="module-bay" name="module-bay">

            <label for="Length-Width-Height">Length-Width-Height:</label>
            <input type="text" id="Length-Width-Height" name="Length-Width-Height">

            <label for="built-material">Built Material:</label>
            <input type="text" id="built-material" name="built-material">

            <label for="user-manual">User Manual:</label>
            <input type="text" id="user-manual" name="user-manual">
            
            <input type="submit" value="Add Transmitter">
        </form>
    </div>
</body>
</html>
