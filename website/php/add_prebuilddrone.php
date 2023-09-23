<?php
    // Include the database connection file
    require_once '../private/dbconnect.php';

    // Retrieve data from the form
    $fpv_prebuild_name = $_POST['fpv_prebuild_name'];
    $description = $_POST['description'];
    $drone_class = $_POST['drone_class'];
    $frame = $_POST['frame'];
    $arms = $_POST['arms'];
    $wheelbase = $_POST['wheelbase'];
    $prop_duct = isset($_POST['prop_duct']) ? 1 : 0; // 1 means "yes" for the checkbox
    $micro_controler = $_POST['micro_controler'];
    $imu = $_POST['imu'];
    $bluetooth_ble = $_POST['bluetooth_ble'];
    $osd_chip = $_POST['osd_chip'];
    $blackbox = $_POST['blackbox'];
    $fc_usb_plug = $_POST['fc_usb_plug'];
    $esc = $_POST['esc'];
    $power_input = $_POST['power_input'];
    $vtx = $_POST['vtx'];
    $camera = $_POST['camera'];
    $antenna = $_POST['antenna'];
    $reciever = $_POST['reciever'];
    $buzzer = $_POST['buzzer'];
    $motors = $_POST['motors'];
    $props = $_POST['props'];
    $gps = $_POST['gps'];
    $weight = $_POST['weight'];
    $Length_Width_Height = $_POST['Length_Width_Height'];
    $strap = $_POST['strap'];
    $led_lighting = $_POST['led_lighting'];
    $battery_conector = $_POST['battery_conector'];
    $other = $_POST['other'];

    // Sanitize and validate data (you should improve data validation)
    $fpv_prebuild_name = filter_var($_POST['fpv_prebuild_name'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
    $drone_class = filter_var($_POST['drone_class'], FILTER_SANITIZE_NUMBER_INT);
    $frame = filter_var($_POST['frame'], FILTER_SANITIZE_STRING);
    $arms = filter_var($_POST['arms'], FILTER_SANITIZE_NUMBER_INT);
    $wheelbase = filter_var($_POST['wheelbase'], FILTER_SANITIZE_NUMBER_INT);
    if (isset($_POST['prop_duct'])) {
        $prop_duct = filter_var($_POST['prop_duct'], FILTER_SANITIZE_NUMBER_INT);
    } else {
        $prop_duct = 0;
    }
    $fc = filter_var($_POST['fc'], FILTER_SANITIZE_STRING);
    $micro_controler = filter_var($_POST['micro_controler'], FILTER_SANITIZE_STRING);
    $imu = filter_var($_POST['imu'], FILTER_SANITIZE_STRING);
    $bluetooth_ble = filter_var($_POST['bluetooth_ble'], FILTER_SANITIZE_STRING);
    $osd_chip = filter_var($_POST['osd_chip'], FILTER_SANITIZE_STRING);
    $blackbox = filter_var($_POST['blackbox'], FILTER_SANITIZE_STRING);
    $fc_usb_plug = filter_var($_POST['fc_usb_plug'], FILTER_SANITIZE_NUMBER_INT);
    $esc = filter_var($_POST['esc'], FILTER_SANITIZE_STRING);
    $power_input = filter_var($_POST['power_input'], FILTER_SANITIZE_STRING);
    $vtx = filter_var($_POST['vtx'], FILTER_SANITIZE_STRING);
    $camera = filter_var($_POST['camera'], FILTER_SANITIZE_STRING);
    $antenna = filter_var($_POST['antenna'], FILTER_SANITIZE_STRING);
    $reciever = filter_var($_POST['reciever'], FILTER_SANITIZE_STRING);
    $buzzer = filter_var($_POST['buzzer'], FILTER_SANITIZE_STRING);
    $motors = filter_var($_POST['motors'], FILTER_SANITIZE_STRING);
    $props = filter_var($_POST['props'], FILTER_SANITIZE_STRING);
    $gps = filter_var($_POST['gps'], FILTER_SANITIZE_STRING);
    $weight = filter_var($_POST['weight'], FILTER_SANITIZE_STRING);
    $Length_Width_Height = filter_var($_POST['Length_Width_Height'], FILTER_SANITIZE_STRING);
    $strap = filter_var($_POST['strap'], FILTER_SANITIZE_STRING);
    $led_lighting = filter_var($_POST['led_lighting'], FILTER_SANITIZE_STRING);
    $battery_conector = filter_var($_POST['battery_conector'], FILTER_SANITIZE_STRING);
    $other = filter_var($_POST['other'], FILTER_SANITIZE_STRING);

    // Validate data (you should implement more robust validation)
    $isValid = true; // You should implement more validation rules

    if (empty($fpv_prebuild_name)) {
        $isValid = false;
        $errors[] = "FPV Prebuild Name is required.";
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
            $sql = "INSERT INTO fpv_prebuilds (fpv_prebuild_name, description, drone_class, frame, arms, wheelbase, prop_duct, fc, micro_controler, imu, bluetooth_ble, osd_chip, blackbox, fc_usb_plug, esc, power_input, vtx, camera, antenna, reciever, buzzer, motors, props, gps, weight, length_width_height, strap, led_lighting, battery_conector, other) 
            VALUES ('$fpv_prebuild_name', '$description', '$drone_class', '$frame', '$arms', '$wheelbase', '$prop_duct', '$fc', '$micro_controler', '$imu', '$bluetooth_ble', '$osd_chip', '$blackbox', '$fc_usb_plug', '$esc', '$power_input', '$vtx', '$camera', '$antenna', '$reciever', '$buzzer', '$motors', '$props', '$gps', '$weight', '$Length_Width_Height', '$strap', '$led_lighting', '$battery_conector', '$other')";
                echo "Error: " . $sql . "<br>";

            $conn->query($sql);

            $lastInsertId = $conn->lastInsertId(); // Get the last inserted ID
            if (isset($lastInsertId)) {
                header("Location: ../index.php?page=admindashboard");
            } else {
                echo "Error: " . $sql . "<br>";
            }
        } else {
            // Data is not valid, handle errors (e.g., display error messages)
            echo "Error";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
