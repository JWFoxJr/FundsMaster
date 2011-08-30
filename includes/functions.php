<?php
/**
 * File name: functions.php
 * User: joe@jwfoxjr.com
 * Date: 8/15/11
 * Time: 9:20 AM
 *
 *
 * @todo: Add additional functions code.
 */

/*** mysql hostname ***/
$hostname = "localhost";

/*** mysql username ***/
$username = "root";

/*** mysql password ***/
$password = "#--5ql4dm1n--#";

function ListStreets() {

    /*** mysql hostname ***/
    $hostname = "localhost";

    /*** mysql username ***/
    $username = "root";

    /*** mysql password ***/
    $password = "#--5ql4dm1n--#";

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);

    /*** prepare the SQL statement ***/
    $sql = "SELECT DISTINCT street FROM address ORDER BY street ASC";

    /*** fetch into an PDOStatement object ***/
    $stmt = $dbh->query($sql);

    /*** echo number of columns ***/
    $result = $stmt->fetchALL(PDO::FETCH_COLUMN,0);

    /*** loop of the results ***/

    echo "<select>";
        echo "<option name=\"---\" value=\"---\">---</option>";
    foreach($result as $street){
        echo "<option name=\"".$street."\">".$street."</option>";
        }
    unset($street);
    echo "</select>";

    /*** close the database connection ***/
    $dbh = null;

    }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
}

function UpdateAddress(){

    /*** mysql hostname ***/
    $hostname = "localhost";

    /*** mysql username ***/
    $username = "root";

    /*** mysql password ***/
    $password = "#--5ql4dm1n--#";

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);

    /*** prepare the SQL statement ***/
    $sql = "SELECT DISTINCT street FROM address ORDER BY street ASC";

    /*** fetch into an PDOStatement object ***/
    $stmt = $dbh->query($sql);

    /*** echo number of columns ***/
    $result = $stmt->fetchALL(PDO::FETCH_COLUMN,0);

    /*** loop of the results ***/
    ?>

    <script type="text/javascript">
        function ChangeAddress(str) {

        if (str=="")
        {
            document.getElementById("txtHint").innerHTML="";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
            xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","includes/ajax.php?q="+str,true);
        xmlhttp.send();
        }
    </script>
    <?php
    echo "<select name=\"streets\" size=\"5\" onchange=\"ChangeAddress(this.value)\">";
        //echo "<option name=\"---\" value=\"---\">---</option>";
    foreach($result as $street){
        echo "<option name=\"".$street."\" value=\"".$street."\">".$street."</option>";
        }
    unset($street);
    echo "</select>";

    /*** close the database connection ***/
    $dbh = null;

    }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
}

function ListRoutes() {

    /*** mysql hostname ***/
    $hostname = "localhost";

    /*** mysql username ***/
    $username = "root";

    /*** mysql password ***/
    $password = "#--5ql4dm1n--#";

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);

        /*** prepare the SQL statement ***/
        $sql = "SELECT rtcode, description FROM routes ORDER BY rtcode ASC";

        /*** fetch into an PDOStatement object ***/
        $stmt = $dbh->query($sql);

        /*** echo number of columns ***/
        $result = $stmt->fetchALL();

        /*** loop of the results ***/
        if ( isset ( $_GET['action'] ) && $_GET['action'] == "add" ){

        echo "<select>";
        foreach($result as $routes){
            echo "<option name=\"".$routes[0]."\">".$routes[0]." - ".$routes[1]."</option>";
        }
        unset($routes);
        echo "</select><br>";

        } else {
            echo "<select onchange=\"showHouses(this.value)\">";
            foreach($result as $routes){
                echo "<option name=\"".$routes[0]."\">".$routes[0]." - ".$routes[1]."</option>";
            }
            unset($routes);
            echo "</select><br>";
        }

        /*** close the database connection ***/
        $dbh = null;

    }
    /*** show an error if we can't connect to the database ***/
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
}


function UpdateRoutes() {

}

function EntryMethod($entry_method) {

}

function GenerateMailing($mailing) {

}


