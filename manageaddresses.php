<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/21/11
 * Time: 1:56 AM
 * To change this template use File | Settings | File Templates.
 */
 
echo "This is where we process the data and then return back to the proper address management page.<br>";

echo $_POST["resident"]."<br>";
echo $_POST["house"]."<br>";
echo $_POST["street"]."<br>";
echo $_POST["suffix"]."<br>";
echo $_POST["apt"]."<br>";
echo $_POST["city"]."<br>";
echo $_POST["state"]."<br>";
echo $_POST["zip"]."<br>";
echo $_POST["plus4"]."<br>";
echo $_POST["rtcode"]."<br>";

echo "<h1>".$_POST["addrmgmt"]."</h1>";

$rtcode = $_POST["rtcode"];
$resident = $_POST["resident"];
$house = $_POST["house"];
$street = $_POST["street"];
$suffix = $_POST["suffix"];
$apt = $_POST["apt"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$plus4 = $_POST["plus4"];

/*** mysql hostname ***/
$hostname = "localhost";

/*** mysql username ***/
$username = "root";

/*** mysql password ***/
$password = "#--5ql4dm1n--#";

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=fundsmaster", $username, $password);
    /*** echo a message saying we have connected ***/
    echo "Connected to database";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

if ($_POST["addrmgmt"] == "1") {

    /*** INSERT data ***/
    $count = $dbh->exec("INSERT INTO address(rtcode, resident, house, street, suffix, apt, city, state, zip, plus4)
        VALUES ('$rtcode', '$resident', '$house', '$street', '$suffix', '$apt', '$city', '$state', '$zip', '$plus4')");

    /*** echo the number of affected rows ***/
    echo $count;

    /*** close the database connection ***/
    $dbh = null;
}
else {
    echo "That's not a 1";
}
?>