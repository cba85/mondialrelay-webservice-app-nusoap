<?php

/**
 * Include nusoap, conf file and soap request
 */
require_once 'nusoap/nusoap.php';
require_once 'includes/conf.php';
require_once 'includes/i18n.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require_once 'includes/soap.php';
    if ($_SERVER['REQUEST_URI'] == '/')
    {
        require_once 'includes/soap-shipping.php';
    }
    elseif ($_SERVER['REQUEST_URI'] == '/barcodes.php') {
        require_once 'includes/soap-barcodes.php';
    }
    elseif ($_SERVER['REQUEST_URI'] == '/tracking.php') {
        require_once 'includes/soap-tracking.php';
    }
}
