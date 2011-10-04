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

/*** Setup our Connection ***/
Db::setConnectionInfo('fundsmaster','root','#--5ql4dm1n--#','mysql','localhost');

/*** Address Related Functions ***/
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

function ShowResident() {
    $varHouse = $_POST['lstSelectHouse'];
    $varResident = Db::getRow('SELECT resident FROM address WHERE id = ?', $varHouse);
    echo $varResident['resident'];
}

function ChangeResident() {
    $varChangeResident = array('varResident' => $_POST['txtChangeResident'], 'varResidentId' => $_POST['txtResidentId']);
    Db::execute('UPDATE address SET resident = :varResident WHERE id = :varResidentId', $varChangeResident);
    $varResult = Db::getRow('SELECT * FROM address WHERE id =?', $varChangeResident['varResidentId']);
    echo 'Update Completed. Resident updated to '.$varResult['resident'];
}


/*** Route Related Functions ***/
function ListRoutes() {
    $result = Db::getResult('SELECT rtcode, description FROM routes ORDER BY rtcode ASC');
        foreach($result as $varRoutes){
            echo '<option name="'.$varRoutes['rtcode'].'" value="'.$varRoutes['rtcode'].'">'.$varRoutes['rtcode'].' - '.$varRoutes['description'].'</option>';
        }
}

function ShowRouteAssignment() {
    $varRouteCode = $_POST['cboRouteCode'];
    $result = Db::getRow('SELECT * FROM routes WHERE rtcode= ? ', $varRouteCode);
    echo '<label for="txtRouteAssignment">Update Assignment for Route '. $result['rtcode'].' - '.$result['description'].'</label><br><br>';
    echo '<input type="text" name="txtRouteAssignment" size="20" maxlength="20" value="'.$result['assignment'].'">';
}

function UpdateRouteAssignment() {
    $arrRouteAssignment = array('varRouteId' => $_POST['txtRouteId'], 'varRouteAssignment' => $_POST['txtRouteAssignment']);
    Db::execute('UPDATE routes SET assignment = :varRouteAssignment WHERE rtcode = :varRouteId', $arrRouteAssignment);
    $varResult = Db::getRow('SELECT * FROM routes WHERE rtcode = ?', $arrRouteAssignment['varRouteId']);
    echo 'Update Completed. Route assigned to '.$varResult['assignment'];
}

/* @todo: Need to write CSS and remove inline styles. */

function RouteReport() {
    $varResult = Db::getResult('SELECT * FROM routes ORDER BY rtcode');
        echo '<div id="RouteReport" class="RouteReport">'."\n";
        echo '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
        echo '<tr><th><h3>Route</h3></th><th><h3>Assignment</h3></th></tr>';
        foreach($varResult as $varRouteReport){
            echo '<tr><td>'.$varRouteReport['rtcode'].' - '.$varRouteReport['description'].'</td>';
            echo '<td>'.$varRouteReport['assignment'].'</td></tr>';
        }
        echo '</table>';
        echo '</div>';
}
