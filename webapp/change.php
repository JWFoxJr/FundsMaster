        <div id="body">
            <p>Change forms go in here!</p><br>

            <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]") ?>">
                <?php UpdateAddress(); ?>

            <p id="txtHint"></p>
            <div style="text-align: center; width: 80%"><input type="submit" name="change" value="Change Address"></div>
            </form>