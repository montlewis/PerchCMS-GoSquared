<?php

include(__DIR__ . '/../../../core/inc/api.php');

// Perch API
$API = new PerchAPI(1.0, 'gosquared_montlewis');

// APIs
$Lang = $API->get('Lang');
$HTML = $API->get('HTML');
$Settings = $API->get('Settings');

// Page settings
$Perch->page_title = $Lang->get('GoSquared');

// Page Initialising
include('modes/_subnav.php');

// Perch Frame
include(PERCH_CORE . '/inc/top.php');

// Page
include('modes/gosquared.php');

// Perch Frame
include(PERCH_CORE . '/inc/btm.php');
