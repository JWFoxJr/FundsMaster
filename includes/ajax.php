<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/28/11
 * Time: 12:29 AM
 * To change this template use File | Settings | File Templates.
 */

require_once('Db.php');

/*** Setup our Connection *///
Db::setConnectionInfo('fundsmaster','root','#--5ql4dm1n--#','mysql','localhost');

    $q=$_GET['q'];

//    /*** prepare the SQL statement ***/
    $sql = 'SELECT house, street, apt, id FROM address WHERE street="'.$q.'" ORDER BY house,apt ASC';
    $result = Db::getResult($sql);
    echo '<select size="5">';
    /*** loop of the results ***/
    foreach($result as $key=>$house){
        echo '<option name="'.$house['id'].'" value="'.$house['id'].'">'.$house['house'].' '.$house['street'].' '.$house['apt'].'</option>';
    }
