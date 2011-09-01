<?php
/**
 * File name: index.php
 * User: joe@jwfoxjr.com
 * Date: 8/8/11
 * Time: 2:52 PM
 */
 
include ('includes/header.php');
include ('includes/sidebar.php');
require_once('includes/functions.php');

    if ( isset ( $_GET['action'] ) && $_GET['action'] == "add" ){
        include('webapp/add.php');
    }elseif ( isset ( $_GET['action'] ) && $_GET['action'] == "change" ) {
        include('webapp/change.php');
    } elseif ( isset ( $_GET['action'] ) && $_GET['action'] == "delete" ) {
        include('webapp/delete.php');
    } else {
        include('webapp/main.php');
    }
include ('includes/footer.php');?>