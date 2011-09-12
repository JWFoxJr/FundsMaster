<?php

if (isset ($_POST['update']) == 'update') {
?>
    <div id="body">
        <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]") ?>">
            <?php UpdateRoutes($rtcode); ?>
        </form>
    </div>
<?php
} else {
?>

    <div id="body">
        <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]");?>">
            <select name="rtcode" id="rtcode">
                <?php ListRoutes(); ?>
            </select>
            <input type="submit" name="update" value="Update Route">
        </form>
    </div>

<?php
}
?>