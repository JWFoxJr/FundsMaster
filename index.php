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

    if ( isset ( $_GET['action'] ) && $_GET['action'] == 'add' ){
        include('webapp/add.php');
    }elseif ( isset ( $_GET['action'] ) && $_GET['action'] == 'update' ) {
        include('webapp/update.php');
    } elseif ( isset ( $_GET['action'] ) && $_GET['action'] == 'delete' ) {
        include('webapp/delete.php');
    } elseif ( isset ( $_GET['action'] ) && $_GET['action'] == 'routes') {
        include('webapp/admin.php');
    } elseif ( isset ($_GET['action'] ) && $_GET['action'] == 'reports') {
        include('webapp/reports.php');
    }else{
        include('webapp/main.php');
    }
include ('includes/footer.php');?>