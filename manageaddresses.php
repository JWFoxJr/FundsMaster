<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/21/11
 * Time: 1:56 AM
 * To change this template use File | Settings | File Templates.
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
            <form method="post" action="<?php echo htmlentities("$_SERVER[PHP_SELF]");?>">
                <input type="hidden" id="addrmgmt" name="addrmgmt" value="1">
                <label for="resident">Resident:</label>
                <input type="text" id="resident" name="resident" maxlength="30" size="30"
                       onblur="validateLength(1, 32, this, document.getElementById('message_help'))"> <sup>*</sup><br>
                    <sup><span id="message_help" class="help"></span></sup>
                <label for="house">House Number:</label>
                <input type="text" id="house" name="house" maxlength="4" size=4
                       onblur="validateNonEmpty(this, document.getElementById('house_help'))"> <sup>*</sup><br>
                    <span id="house_help" class="help"></span>
                <label for="street">Street:</label>
                <input type="text" id="street" name="street" maxlength="50" size="50"
                       onblur="validateNonEmpty(this, document.getElementById('street_help'));"> <sup>*</sup><br>
                    <span id="street_help" class="help"></span>
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
<?php
/*** mysql hostname ***/
$hostname = "localhost";

/*** mysql username ***/
$username = "root";

/*** mysql password ***/
$password = "#--5ql4dm1n--#";

if ($_POST["addrmgmt"] =="1") {

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);
    /*** echo a message saying we have connected ***/
    echo "Connected to database";


    /*** prepare the SQL statement ***/
    $sql = "SELECT * FROM addresses";

    /*** fetch into an PDOStatement object ***/
    $stmt = $dbh->query($sql);

    /*** echo number of columns ***/
    $obj = $stmt->fetch(PDO::FETCH_OBJ);

    /*** loop of the results ***/
    foreach($obj as $street)
        { ?>
        <select name="street" id="street">
            <option value="$street"><?php echo $street;?></option>
        </select>
     <?php
        }
    $count = $stmt->rowCount();
           print ("$count addresses \n");

        $dbh = null;

    /*** close the database connection ***/
    $dbh = null;

        }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}
?>