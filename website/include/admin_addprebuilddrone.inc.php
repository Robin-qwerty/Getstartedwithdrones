<div class="admin-panel">
<h1>Add FPV Prebuild</h1>
    <form action="php/add_prebuilddrone.php" method="POST">
        <label for="fpv_prebuild_name">Name:</label>
        <input type="text" name="fpv_prebuild_name" id="fpv_prebuild_name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" required></textarea><br>

        <label for="drone_class">Drone Class:</label>
        <select name="drone_class" id="drone_class">
            <option value="1">Race</option>
            <option value="2">Freestyle</option>
            <option value="3">Race/Freestyle</option>
            <option value="4">Cinewhoop</option>
            <option value="5">Cinelifter</option>
            <option value="6">Tinywhoop</option>
        </select><br>

        <label for="frame">Frame:</label>
        <input type="text" name="frame" id="frame"><br>

        <label for="arms">Arm Thickness (mm):</label>
        <input type="number" name="arms" id="arms"><br>

        <label for="wheelbase">Wheelbase (mm):</label>
        <input type="number" name="wheelbase" id="wheelbase"><br>

        <label for="prop_duct">Prop Duct:</label>
        <input type="checkbox" name="prop_duct" id="prop_duct" value="1"><br>

        <label for="fc">Flight Controller:</label>
        <input type="text" name="fc" id="fc"><br>

        <label for="micro_controler">Microcontroller:</label>
        <input type="text" name="micro_controler" id="micro_controler"><br>

        <label for="imu">Inertial Measurement Unit (Gyro):</label>
        <input type="text" name="imu" id="imu"><br>

        <label for="bluetooth_ble">Bluetooth BLE:</label>
        <input type="text" name="bluetooth_ble" id="bluetooth_ble"><br>

        <label for="osd_chip">OSD Chip:</label>
        <input type="text" name="osd_chip" id="osd_chip"><br>

        <label for="blackbox">Blackbox:</label>
        <input type="text" name="blackbox" id="blackbox"><br>

        <label for="fc_usb_plug">FC USB Plug:</label>
        <select name="fc_usb_plug" id="fc_usb_plug">
            <option value="0">none</option>
            <option value="1">usb-c</option>
            <option value="2">micro usb</option>
        </select><br>

        <label for="esc">Electronic Speed Controller (ESC):</label>
        <input type="text" name="esc" id="esc"><br>

        <label for="power_input">ESC Power Input:</label>
        <input type="text" name="power_input" id="power_input"><br>

        <label for="vtx">Video Transmitter (VTX):</label>
        <input type="text" name="vtx" id="vtx"><br>

        <label for="camera">Camera:</label>
        <input type="text" name="camera" id="camera"><br>

        <label for="antenna">VTX Antenna:</label>
        <input type="text" name="antenna" id="antenna"><br>

        <label for="reciever">Receiver:</label>
        <input type="text" name="reciever" id="reciever"><br>

        <label for="buzzer">Buzzer:</label>
        <input type="text" name="buzzer" id="buzzer"><br>

        <label for="motors">Motors:</label>
        <input type="text" name="motors" id="motors"><br>

        <label for="props">Propellers:</label>
        <input type="text" name="props" id="props"><br>

        <label for="gps">GPS:</label>
        <input type="text" name="gps" id="gps"><br>

        <label for="weight">Weight (Without Battery):</label>
        <input type="text" name="weight" id="weight"><br>

        <label for="Length_Width_Height">Dimensions (Length×Width×Height mm):</label>
        <input type="text" name="Length_Width_Height" id="Length_Width_Height"><br>

        <label for="strap">Battery Strap:</label>
        <input type="text" name="strap" id="strap"><br>

        <label for="led_lighting">LED Lighting:</label>
        <input type="text" name="led_lighting" id="led_lighting"><br>

        <label for="battery_conector">Battery Connector:</label>
        <input type="text" name="battery_conector" id="battery_conector"><br>

        <label for="other">other:</label>
        <input type="text" name="other" id="other"><br>

        <input type="submit" value="Submit">
    </form>
</div>
