<?php

if (isset ($_POST['btnSelectRoute']) == 'btnSelectRoute') {
?>
    <div id="body">
        <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]") ?>">
            <input type="hidden" name="txtRouteId" value="<?php echo $_POST['cboRouteCode']; ?>">
            <?php ShowRouteAssignment(); ?>
            <input type="submit" name="btnUpdateAssignment" value="Update Route Assignment">
        </form>
    </div>
<?php

} elseif (isset ($_POST['btnUpdateAssignment']) == 'btnUpdateAssignment') {
//    echo 'We will have a function here that will update the record in the database. For the time being we are going to just <br>';
//    echo 'show the posted variable.<br><br>';
//    echo $_POST['txtRouteId'].' - '.$_POST['txtRouteAssignment'];
?>
    <div id="body">
        <p><?php UpdateRouteAssignment(); ?></p>
    </div>

<?php

} else {
?>

    <div id="body">
        <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]");?>">
            <select name="cboRouteCode" id="cboRouteCode">
                <?php ListRoutes(); ?>
            </select>
            <input type="submit" name="btnSelectRoute" value="Select Route">
        </form>
    </div>

<?php
}
?>