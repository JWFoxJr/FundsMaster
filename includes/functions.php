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

require_once('Db.php');

/*** Setup our Connection *///
Db::setConnectionInfo('fundsmaster','root','#--5ql4dm1n--#','mysql','localhost');

function StreetListing() {
    $result = Db::getResult('SELECT DISTINCT street FROM address ORDER BY street ASC');
    foreach($result as $key=>$street) {
        echo '<option name="'.$street['street'].'" value="'.$street['street'].'">'.$street['street'].'</option>';
    }
}

function UpdateAddress(){
    echo '<select name="streets" size="5" onchange="GetHouses(this.value)">';
    StreetListing();
    echo '</select>';
}

function ListRoutes() {
    $result = Db::getResult('SELECT rtcode, description FROM routes ORDER BY rtcode ASC');
        /*** loop of the results ***/
        foreach($result as $key=>$routes){
            echo '<option name="'.$routes['rtcode'].'" value="'.$routes['rtcode'].'">'.$routes['rtcode'].' - '.$routes['description'].'</option>';
        }
}

function ShowResident() {
    $varHouse = $_POST['lstSelectHouse'];
    $varResident = Db::getRow('SELECT resident FROM address WHERE id = '.$varHouse);
    echo $varResident['resident'];
}

function UpdateRoutes($rtcode) {
    $rtcode = $_POST['rtcode'];
    $result = Db::getRow('SELECT * FROM routes WHERE rtcode='.$_POST['rtcode']);
    echo '<label for="rtassignment">Update Assignment for route '. $result['rtcode'].' - '.$result['description'].'</label><br><br>';
    echo '<input type="text" name="rtassignment" size="20" maxlength="20" value="'.$result['assignment'].'">';
}

function EntryMethod($entry_method) {

}

function GenerateMailing($mailing) {

}


