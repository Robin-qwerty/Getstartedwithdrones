<div class="admin-dashboard">
    <h1>Transmitter List</h1>
    
    <button class="add-new-button" onclick="location.href='index.php?page=admin_addtransmitter';" type="button">Add New Transmitter</button>

    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Weight</th>
                <th>Built-in RF</th>
                <th>Supported Protocols</th>
                <th>Frequency</th>
                <th>RF Power</th>
                <th>RF Channels</th>
                <th>Control Distance</th>
                <th>Antenna Gain</th>
                <th>Operation Voltage</th>
                <th>Operation Current</th>
                <th>Operating System</th>
                <th>Firmware Upgrade Method</th>
                <th>Display</th>
                <th>Speaker</th>
                <th>Battery</th>
                <th>Battery Type</th>
                <th>Charging</th>
                <th>Ports</th>
                <th>Gimbal</th>
                <th>Module Bay</th>
                <th>Length Width Height</th>
                <th>Built Material</th>
                <th>User Manual</th>
                <th>Other</th>
            </tr>

            <?php
                // Retrieve data from the transmitters table
                $sql = "SELECT * FROM transmitters";
                $result = $conn->query($sql);

                if ($result !== false) {
                    $numRows = $result->rowCount();

                    if ($numRows > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['transmitter_name'] . "</td>";
                            echo "<td>" . $row['manufacturer'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['weight'] . "</td>";
                            echo "<td>" . $row['buildin_rf'] . "</td>";
                            echo "<td>" . $row['supported_protocols'] . "</td>";
                            echo "<td>" . $row['frequency'] . "</td>";
                            echo "<td>" . $row['rf_power'] . "</td>";
                            echo "<td>" . $row['rf_channels'] . "</td>";
                            echo "<td>" . $row['control_distance'] . "</td>";
                            echo "<td>" . $row['antenna_gain'] . "</td>";
                            echo "<td>" . $row['operation_voltage'] . "</td>";
                            echo "<td>" . $row['operation_current'] . "</td>";
                            echo "<td>" . $row['operating_system'] . "</td>";
                            echo "<td>" . $row['firmware_upgrade_method'] . "</td>";
                            echo "<td>" . $row['display'] . "</td>";
                            echo "<td>" . $row['speaker'] . "</td>";
                            echo "<td>" . $row['battery'] . "</td>";
                            echo "<td>" . $row['battery_type'] . "</td>";
                            echo "<td>" . $row['charching'] . "</td>";
                            echo "<td>" . $row['ports'] . "</td>";
                            echo "<td>" . $row['gimbal'] . "</td>";
                            echo "<td>" . $row['module_bay'] . "</td>";
                            echo "<td>" . $row['length_width_height'] . "</td>";
                            echo "<td>" . $row['built_material'] . "</td>";
                            echo "<td>" . $row['user_manual'] . "</td>";
                            echo "<td>" . $row['other'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='28'>No transmitters found</td></tr>";
                    }
                } else {
                    echo "Error executing query: " . $conn->errorInfo()[2];
                }
            ?>
        </table>
    </div>
</div>
