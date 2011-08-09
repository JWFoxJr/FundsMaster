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

<div id="sidebar" style="position:absolute; width:320px; height:350px; top:100px; left:0; background-color: yellow;">
    <ul>Main Menu
        <li>Administration</li>
        <li>Address Master Menu
                <ul>
                    <li>New Address</li>
                    <li>Change Address</li>
                    <li>Delete Address</li>
                    <li>Route Master</li>
                </ul>
        </li>
        <li>Current Year Master Menu
                <ul>
                    <li>Entry by ID</li>
                    <li>Entry by Street</li>
                    <li>Entry by Route</li>
                </ul>
        </li>
        <li>History
                <ul>
                    <li>Create Historical Table</li>
                    <li>History Cross Reference</li>
                    <li>Historical Top Contributors</li>
                </ul>
        </li>
        <li>Reports</li>
    </ul>
</div>
