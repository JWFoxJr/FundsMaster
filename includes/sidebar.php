<?php
/**
 * File name: sidebar.php
 * User: joe@jwfoxjr.com
 * Date: 8/9/11
 * Time: 9:52 AM
 *
 *
 * @todo: Need to create either AJAX or JS based menu structure
 */
 
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



<div id="sidebar">

<div id="accordion">
	<h3><a href="#">Administration</a></h3>
	<div>
		<p>Administration Menu</p>
	</div>
	<h3><a href="#">Address Master Menu</a></h3>
	<div>
		<p>
		    <ul>
                <li>New Address</li>
                <li>Change Address</li>
                <li>Delete Address</li>
                <li>Route Master</li>
             </ul>
		</p>
	</div>
	<h3><a href="#">Current Year Master Menu</a></h3>
	<div>
		<p>
		    <ul>
                <li>Entry by ID</li>
                <li>Entry by Street</li>
                <li>Entry by Route</li>
            </ul>
		</p>
	</div>
	<h3><a href="#">History</a></h3>
	<div>
		<p>
		    <ul>
                <li>Create Historical Table</li>
                <li>History Cross Reference</li>
                <li>Historical Top Contributors</li>
            </ul>
		</p>
	</div>
    <h3><a href="#">Reports</a></h3>
    <div>
        <p>
            <ul>
                <li>Route Listing</li>
                <li>Routes with Percentages Left</li>
                <li>Route Totals</li>
            </ul>
        </p>
    </div>
</div>
</div>


