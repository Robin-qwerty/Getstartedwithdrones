<?php
    // Include the database connection file
    require_once '../private/dbconnect.php';

    // Retrieve data from the form
    $transmitter_name = $_POST['transmitter_name'];
    $description = $_POST['description'];
    $weight = $_POST['weight'];
    $buildin_rf = $_POST['buildin-rf'];
    $supported_protocols = $_POST['supported-protocols'];
    $frequency = $_POST['frequency'];
    $rf_power = $_POST['rf-power'];
    $rf_channels = $_POST['rf-channels'];
    $control_distance = $_POST['control-distance'];
    $antenna_gain = $_POST['antenna-gain'];
    $operation_voltage = $_POST['operation-voltage'];
    $operation_current = $_POST['operation-current'];
    $operating_system = $_POST['operating-system'];
    $firmware_upgrade_method = $_POST['firmware-upgrade-method'];
    $display = $_POST['display'];
    $speaker = $_POST['speaker'];
    $battery = $_POST['battery'];
    $battery_type = $_POST['battery-type'];
    $charching = $_POST['charching'];
    $ports = $_POST['ports'];
    $bimbal = $_POST['bimbal'];
    $module_bay = $_POST['module-bay'];
    $Length_Width_Height = $_POST['Length-Width-Height'];
    $built_material = $_POST['built-material'];
    $user_manual = $_POST['user-manual'];

   // Sanitize and validate data
    $transmitter_name = filter_var($_POST['transmitter_name'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
    $weight = filter_var($_POST['weight'], FILTER_SANITIZE_STRING);
    $buildin_rf = filter_var($_POST['buildin-rf'], FILTER_SANITIZE_STRING);
    $supported_protocols = filter_var($_POST['supported-protocols'], FILTER_SANITIZE_STRING);
    $frequency = filter_var($_POST['frequency'], FILTER_SANITIZE_STRING);
    $rf_power = filter_var($_POST['rf-power'], FILTER_SANITIZE_STRING);
    $rf_channels = filter_var($_POST['rf-channels'], FILTER_SANITIZE_STRING);
    $control_distance = filter_var($_POST['control-distance'], FILTER_SANITIZE_STRING);
    $antenna_gain = filter_var($_POST['antenna-gain'], FILTER_SANITIZE_STRING);
    $operation_voltage = filter_var($_POST['operation-voltage'], FILTER_SANITIZE_STRING);
    $operation_current = filter_var($_POST['operation-current'], FILTER_SANITIZE_STRING);
    $operating_system = filter_var($_POST['operating-system'], FILTER_SANITIZE_STRING);
    $firmware_upgrade_method = filter_var($_POST['firmware-upgrade-method'], FILTER_SANITIZE_STRING);
    $display = filter_var($_POST['display'], FILTER_SANITIZE_STRING);
    $speaker = filter_var($_POST['speaker'], FILTER_SANITIZE_STRING);
    $battery = filter_var($_POST['battery'], FILTER_SANITIZE_STRING);
    $battery_type = filter_var($_POST['battery-type'], FILTER_SANITIZE_STRING);
    $charching = filter_var($_POST['charching'], FILTER_SANITIZE_STRING);
    $ports = filter_var($_POST['ports'], FILTER_SANITIZE_STRING);
    $bimbal = filter_var($_POST['bimbal'], FILTER_SANITIZE_STRING);
    $module_bay = filter_var($_POST['module-bay'], FILTER_SANITIZE_STRING);
    $Length_Width_Height = filter_var($_POST['Length-Width-Height'], FILTER_SANITIZE_STRING);
    $built_material = filter_var($_POST['built-material'], FILTER_SANITIZE_STRING);
    $user_manual = filter_var($_POST['user-manual'], FILTER_SANITIZE_STRING);

    // Validate data (you should improve data validation)
    $isValid = true; // You should implement more robust validation

    if (empty($transmitter_name)) {
        $isValid = false;
        $errors[] = "Transmitter Name is required.";
    }

    if (empty($description)) {
        $isValid = false;
        $errors[] = "Description is required.";
    }

    // Add more validation rules as needed
    try {
        if ($isValid) {
            // Data is valid, proceed with database insertion
            // Construct the SQL INSERT query
            $sql = "INSERT INTO transmitters (transmitter_name, description, weight, buildin_rf, supported_protocols, frequency, rf_power, rf_channels, control_distance, antenna_gain, operation_voltage, operation_current, operating_system, firmware_upgrade_method, display, speaker, battery, battery_type, charching, ports, bimbal, module_bay, length_width_height, built_material, user_manual) 
            VALUES ('$transmitter_name', '$description', '$weight', '$buildin_rf', '$supported_protocols', '$frequency', '$rf_power', '$rf_channels', '$control_distance', '$antenna_gain', '$operation_voltage', '$operation_current', '$operating_system', '$firmware_upgrade_method', '$display', '$speaker', '$battery', '$battery_type', '$charching', '$ports', '$bimbal', '$module_bay', '$Length_Width_Height', '$built_material', '$user_manual')";
            $conn->query($sql);

            $lastInsertId = $conn->lastInsertId(); // Get the last inserted ID
            if (isset($lastInsertId)) {
                header("Location: ../index.php?page=admindashboard");
            } else {
                echo "Error: " . $sql . "<br>"; // . $conn->error
            }
        } else {
            // Data is not valid, handle errors (e.g., display error messages)
            echo "Error";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Display the error message
    }
?>
