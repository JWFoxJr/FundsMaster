        <div id="body">
            <form method="post" action="<?php echo htmlentities("$_SERVER[PHP_SELF]");?>">
                <input type="hidden" id="addrmgmt" name="addrmgmt" value="1">
                <label for="resident">Resident:</label><br>
                <input type="text" id="resident" name="resident" maxlength="30" size="30"
                       onblur="validateLength(1, 32, this, document.getElementById('message_help'))"> <sup>*</sup><br>
                    <sup><span id="message_help" class="help"></span></sup>
                <label for="house">House Number:</label><br>
                <input type="text" id="house" name="house" maxlength="4" size=4
                       onblur="validateNonEmpty(this, document.getElementById('house_help'))"> <sup>*</sup><br>
                    <span id="house_help" class="help"></span>
                <label for="street">Street:</label><br>
                <!--<input type="text" id="street" name="street" maxlength="50" size="50"
                       onblur="validateNonEmpty(this, document.getElementById('street_help'));"> <sup>*</sup><br>
                    <span id="street_help" class="help"></span>-->
                <select name="street">
                    <?php StreetListing(); ?>
                </select>
                <?php StreetListing(); ?> <sup>*</sup><br>
                <label for="suffix">Suffix:</label><br>
                <input type="text" id="suffix" name="suffix" maxlength="4"><br>
                <label for="apt">Apartment:</label><br>
                <input type="text" id="apt" name="apt" maxlength="4"><br>
                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" maxlength="30" onblur="validateNonEmpty(this);"> <sup>*</sup><br>
                <label for="state">State:</label><br>
                <input type="text" id="state" name="state" maxlength="2" onblur="validateNonEmpty(this);"> <sup>*</sup><br>
                <label for="zip">ZIP:</label><br>
                <select name="zip" id="zip">
                    <option id="1">14224</option>
                    <option id="2">14218</option>
                    <option id="3">14127</option>
                </select> <sup>*</sup><br>
                <label for="plus4">PLUS4:</label><br>
                <input type="text" id="plus4" name="plus4" maxlength="4"><br>
                <label for="rtcode">Route Code:</label><br>
                <select name="rtcode" id="rtcode">
                    <?php ListRoutes(); ?>
                </select><br>
                <br><br>
                <div style="text-align: center; width: 80%"><input type="submit" name="add" value="Add Address"></div>
                <br>
                <sup>*</sup> Required Field
            </form>
        </div>