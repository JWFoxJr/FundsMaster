<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/20/11
 * Time: 11:29 AM
 * To change this template use File | Settings | File Templates.
 *
 * @todo Have ZIP codes populated from listing in defaults table
 *
 */
 
include('includes/header.php');
include('includes/sidebar.php');
?>

    <script>
	    $(function() {
		    $( "#accordion" ).accordion({
                active: 1,
                collapsable: true,
                event: 'click'
        });
	});
    </script>

        <div id="body">
            <form method="post" action="manageaddresses.php">
                <input type="hidden" id="addrmgmt" name="addrmgmt" value="2">
                <label for="resident">Resident:</label>
                <input type="text" id="resident" name="resident" maxlength="50" onchange="validateNonEmpty(this, document.getElementById('helpText'));"> <sup>*</sup><br>
                    <span id="helpText" class="help"></span>
                <label for="house">House Number:</label>
                <input type="text" id="house" name="house" maxlength="4" onblur="validateNonEmpty(this);"> <sup>*</sup><br>
                <label for="street">Street:</label>
                <input type="text" id="street" name="street" maxlength="50" onblur="validateNonEmpty(this);"> <sup>*</sup><br>
                <label for="suffix">Suffix:</label>
                <input type="text" id="suffix" name="suffix" maxlength="4"><br>
                <label for="apt">Apartment:</label>
                <input type="text" id="apt" name="apt" maxlength="4"><br>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" maxlength="30" onblur="validateNonEmpty(this);"> <sup>*</sup><br>
                <label for="state">State:</label>
                <input type="text" id="state" name="state" maxlength="2" onblur="validateNonEmpty(this);"> <sup>*</sup><br>
                <label for="zip">ZIP:</label>
                <select name="zip" id="zip">
                    <option id="1">14224</option>
                    <option id="2">14218</option>
                    <option id="3">14127</option>
                </select> <sup>*</sup><br>
                <label for="plus4">PLUS4:</label>
                <input type="text" id="plus4" name="plus4" maxlength="4"><br>
                <label for="rtcode">Route Code:</label>
                <select name="rtcode" id="rtcode">
                    <option value="1">1 - Allendale Road</option>
                    <option value="2">2 - Orchard Park Road</option>
                    <option value="3">3 - Bradwood Road / Erwin Road</option>
                </select><br><br>
                <div style="text-align: center; width: 80%"><input type="submit" name="add" value="Add Address"></div>
                <br>
                <sup>*</sup> Required Field
            </form>
        </div>

    <?php include("includes/footer.php"); ?>