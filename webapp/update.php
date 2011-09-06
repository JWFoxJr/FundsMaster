<?php

    if (isset($_POST['change']) == 'change') {
        echo '<div_id="body">';
        echo '<p>This is where the actual name change goes.</p>';
        echo $_POST['test'];
        echo '</div>';
        
    } else { ?>

    <script type="text/javascript">
        function ChangeAddress(str) {

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
            
            <select id="txtHint" name="test" size="5"></select>
            <div style="text-align: center; width: 80%"><input type="submit" name="change" value="Change Address"></div>
            </form>

<?php
    }

?>