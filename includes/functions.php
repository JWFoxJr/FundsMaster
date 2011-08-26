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

function ListStreets() {

    /*** mysql hostname ***/
    $hostname = "localhost";

    /*** mysql username ***/
    $username = "root";

    /*** mysql password ***/
    $password = "#--5ql4dm1n--#";

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);

    /*** echo a message saying we have connected ***/
    /* echo "Connected to database<br>"; */


    /*** prepare the SQL statement ***/
    $sql = "SELECT DISTINCT street FROM address ORDER BY street ASC";

    /*** fetch into an PDOStatement object ***/
    $stmt = $dbh->query($sql);

    /*** echo number of columns ***/
    $result = $stmt->fetchALL(PDO::FETCH_COLUMN,0);

    /* echo "<br>";
            echo round(memory_get_usage() / (1024*1024),3) .' MB<br><br>';*/
        
    /*** loop of the results ***/

    echo "<select>";
    foreach($result as $street){
        echo "<option name=\"".$street."\">".$street."</option>";
    }
    unset($street);
    echo "</select><br>";

    /* $count = $stmt->rowCount();
           print ("$count streets \n"); */

    /*** close the database connection ***/
    $dbh = null;

        }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

}

function AddRoute() {

}

function UpdateRoutes() {

}

function EntryMethod($entry_method) {

}

function GenerateMailing($mailing) {

}


