<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/28/11
 * Time: 12:29 AM
 * To change this template use File | Settings | File Templates.
 */
 
    $q=$_GET["q"];

    /*** mysql hostname ***/
    $hostname = "localhost";

    /*** mysql username ***/
    $username = "root";

    /*** mysql password ***/
    $password = "#--5ql4dm1n--#";

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);

    /*** prepare the SQL statement ***/
    $sql = "SELECT house, street, apt, id FROM address WHERE street=\"".$q."\" ORDER BY house,apt ASC";

    /*** fetch into an PDOStatement object ***/
    $stmt = $dbh->query($sql);

    /*** echo number of columns ***/
    $result = $stmt->fetchALL();

    /*** loop of the results ***/

    echo "<select size=\"5\">";
    foreach($result as $house){
        echo "<option name=\"".$house[3]." value=\"".$house[3]."\">".$house[0]." ".$house[1]." ".$house[2]."</option>";
    }
    unset($street);
    echo "</select>";

    /* $count = $stmt->rowCount();
           print ("$count streets \n"); */

    /*** close the database connection ***/
    $dbh = null;

        }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }