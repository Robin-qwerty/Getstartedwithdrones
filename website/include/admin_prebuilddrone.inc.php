<div class="admin-dashboard">
    <h1>FPV Prebuild Drones List</h1>

    <button class="add-new-button" onclick="location.href='index.php?page=admin_addprebuilddrone';" type="button">Add New FPV Pre-build Drone</button>

    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Drone Class</th>
                <th>Frame</th>
                <th>Arms</th>
                <th>Wheelbase</th>
                <th>Prop Duct</th>
                <th>FC</th>
                <th>Micro Controller</th>
                <th>IMU</th>
                <th>Bluetooth BLE</th>
                <th>OSD Chip</th>
                <th>Blackbox</th>
                <th>FC USB Plug</th>
                <th>ESC</th>
                <th>Power Input</th>
                <th>VTX</th>
                <th>Camera</th>
                <th>Antenna</th>
                <th>Receiver</th>
                <th>Buzzer</th>
                <th>Motors</th>
                <th>Props</th>
                <th>GPS</th>
                <th>Weight</th>
                <th>Length Width Height</th>
                <th>Strap</th>
                <th>LED Lighting</th>
                <th>Battery Connector</th>
                <th>Other</th>
            </tr>

            <?php
                // Include your database connection code here

                // Retrieve data from the fpv_prebuilds table
                $sql = "SELECT * FROM fpv_prebuilds";
                $result = $conn->query($sql);

                if ($result !== false) {
                    $numRows = $result->rowCount();

                    if ($numRows > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['fpv_prebuild_name'] . "</td>";
                            echo "<td>" . $row['manufacturer'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['drone_class'] . "</td>";
                            echo "<td>" . $row['frame'] . "</td>";
                            echo "<td>" . $row['arms'] . "</td>";
                            echo "<td>" . $row['wheelbase'] . "</td>";
                            echo "<td>" . $row['prop_duct'] . "</td>";
                            echo "<td>" . $row['fc'] . "</td>";
                            echo "<td>" . $row['micro_controler'] . "</td>";
                            echo "<td>" . $row['imu'] . "</td>";
                            echo "<td>" . $row['bluetooth_ble'] . "</td>";
                            echo "<td>" . $row['osd_chip'] . "</td>";
                            echo "<td>" . $row['blackbox'] . "</td>";
                            echo "<td>" . $row['fc_usb_plug'] . "</td>";
                            echo "<td>" . $row['esc'] . "</td>";
                            echo "<td>" . $row['power_input'] . "</td>";
                            echo "<td>" . $row['vtx'] . "</td>";
                            echo "<td>" . $row['camera'] . "</td>";
                            echo "<td>" . $row['antenna'] . "</td>";
                            echo "<td>" . $row['receiver'] . "</td>";
                            echo "<td>" . $row['buzzer'] . "</td>";
                            echo "<td>" . $row['motors'] . "</td>";
                            echo "<td>" . $row['props'] . "</td>";
                            echo "<td>" . $row['gps'] . "</td>";
                            echo "<td>" . $row['weight'] . "</td>";
                            echo "<td>" . $row['length_width_height'] . "</td>";
                            echo "<td>" . $row['strap'] . "</td>";
                            echo "<td>" . $row['led_lighting'] . "</td>";
                            echo "<td>" . $row['battery_conector'] . "</td>";
                            echo "<td>" . $row['other'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='32'>No FPV prebuild drones found</td></tr>";
                    }
                } else {
                    echo "Error executing query: " . $conn->errorInfo()[2];
                }
            ?>
        </table>
    </div>
</div
