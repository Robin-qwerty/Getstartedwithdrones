<div class="admin-dashboard">
    <h1>FPV Goggles List</h1>

    <button class="add-new-button" onclick="location.href='index.php?page=admin_addgoggles';" type="button">Add New FPV Goggles</button>
    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Receiver Type</th>
                <th>Receiver Upgradable</th>
                <th>Receiver Replaceable</th>
                <th>Analog</th>
                <th>Digital</th>
                <th>Display Type</th>
                <th>Screen Resolution</th>
                <th>Field of View (FOV)</th>
                <th>Screen Ratio</th>
                <th>Lenses IPD</th>
                <th>Screen Size</th>
                <th>Screen Refresh Rate</th>
                <th>Screen Focal Adjust</th>
                <th>Antenna Connector</th>
                <th>DVR</th>
                <th>Audio</th>
                <th>HDMI Input</th>
                <th>Weight (grams)</th>
                <th>Battery Voltage</th>
                <th>Power Consumption</th>
                <th>User Manual</th>
                <th>Other Features</th>
            </tr>

            <?php
                // Include your database connection code here

                // Retrieve data from the fpv_goggles table
                $sql = "SELECT * FROM fpv_goggles";
                $result = $conn->query($sql);

                if ($result !== false) {
                    $numRows = $result->rowCount();

                    if ($numRows > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['goggles_name'] . "</td>";
                            echo "<td>" . $row['manufacturer'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['receiver_type'] . "</td>";
                            echo "<td>" . $row['receiver_upgradable'] . "</td>";
                            echo "<td>" . $row['receiver_replaceable'] . "</td>";
                            echo "<td>" . $row['analog'] . "</td>";
                            echo "<td>" . $row['digital'] . "</td>";
                            echo "<td>" . $row['display_type'] . "</td>";
                            echo "<td>" . $row['screen_resolution'] . "</td>";
                            echo "<td>" . $row['field_of_view'] . "</td>";
                            echo "<td>" . $row['screen_ratio'] . "</td>";
                            echo "<td>" . $row['lenses_ipd'] . "</td>";
                            echo "<td>" . $row['screen_size'] . "</td>";
                            echo "<td>" . $row['screen_refresh_rate'] . "</td>";
                            echo "<td>" . $row['screen_focal_adjust'] . "</td>";
                            echo "<td>" . $row['antenna_connector'] . "</td>";
                            echo "<td>" . $row['dvr'] . "</td>";
                            echo "<td>" . $row['audio'] . "</td>";
                            echo "<td>" . $row['hdmi_input'] . "</td>";
                            echo "<td>" . $row['weight'] . "</td>";
                            echo "<td>" . $row['battery_voltage'] . "</td>";
                            echo "<td>" . $row['power_consumption'] . "</td>";
                            echo "<td>" . $row['user_manual'] . "</td>";
                            echo "<td>" . $row['other_features'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='27'>No FPV goggles found</td></tr>";
                    }
                } else {
                    echo "Error executing query: " . $conn->errorInfo()[2];
                }
            ?>
        </table>
    </div>
</div>
