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

    <div id="sidebar">

    <div id="accordion">
	    <h3><a href="#" class="sidebar">Administration</a></h3>
	    <div>
		    <p>Administration Menu</p>

	    </div>
	    <h3><a href="#" class="sidebar">Address Master Menu</a></h3>
	    <div>
		         <a href="manageaddresses.php?action=add" class="sidebar">New Address</a><br>
                 <a href="manageaddresses.php?action=change" class="sidebar">Change Address</a><br>
                 <a href="manageaddresses.php?action=delete" class="sidebar">Delete Address</a>
		</div>
	    <h3><a href="#" class="sidebar">Current Year Master Menu</a></h3>
	    <div>
		    <p>
    		    <ul>
                    <li>Entry by ID</li>
                    <li>Entry by Street</li>
                    <li>Entry by Route</li>
                </ul>
		    </p>
	    </div>
	    <h3><a href="#" class="sidebar">History</a></h3>
	    <div>
		    <p>
		        <ul>
                    <li>Create Historical Table</li>
                    <li>History Cross Reference</li>
                    <li>Historical Top Contributors</li>
                </ul>
    		</p>
	    </div>
        <h3><a href="#" class="sidebar">Reports</a></h3>
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


