<?php
/**
 * File name: index.php
 * User: joe@jwfoxjr.com
 * Date: 8/8/11
 * Time: 2:52 PM
 */
 
include ('includes/header.php');
include ('includes/sidebar.php');
?>
 <script>
	$(function() {
		$( "#accordion" ).accordion({
            active:false,
            collapsable: true,
            event: 'click'
        });
	});
</script>

    <div id="body">
        <h3>This is a test</h3>
    </div>
    <?php include ('includes/footer.php');?>