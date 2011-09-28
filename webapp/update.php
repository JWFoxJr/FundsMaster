<?php

    if (isset($_POST['btnSelectHouse']) == 'btnSelectHouse') {
?>
    <div id="body">
        <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]"); ?>">
            <input type="hidden" name="txtResidentId" value="<?php echo $_POST['lstSelectHouse']; ?>">
            <label for="txtChangeResident">Resident:</label><br>
            <input type="text" id="txtChangeResident" name="txtChangeResident" maxlength="30" size="30" value="<?php ShowResident(); ?>">
            <input type="submit" name="btnChangeResident" value="Change Resident">
        </form>
    </div>


<?php        
    } elseif (isset($_POST['btnChangeResident']) == 'btnChangeResident') {
        echo 'We will have a function here that will update the record in the database. For the time being we are going to just <br>';
        echo 'show the posted variable.<br>';
        echo $_POST['txtResidentId'].'<br>';
        echo $_POST['txtChangeResident'];
        
    } else { ?>

    <script type="text/javascript">
        function GetHouses(str) {

        if (str=='')
        {
            document.getElementById('txtHint').innerHTML='';
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
        }
            xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById('txtHint').innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','includes/ajax.php?q='+str,true);
        xmlhttp.send();
        }
    </script>
        
        <div id="body">
            <p>Change forms go in here!</p><br>

            <form method="post" action="<?php htmlentities("$_SERVER[PHP_SELF]") ?>">
                <?php UpdateAddress(); ?>
            
            <select id="txtHint" name="lstSelectHouse" size="5"></select>
            <div style="text-align: center; width: 80%"><input type="submit" name="btnSelectHouse" value="Select House"></div>
            </form>

<?php
    }

?>