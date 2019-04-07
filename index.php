<?php

include 'header.php';

require_once 'controller/WebsiteController.php';

$controller = new WebsiteController();
$controller->handleRequest();

include 'footer.php';
