<?php
require_once('vendor/autoload.php');
require_once('controller/frontend.php');
require_once('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'test') {
            test();
        }
        else { // Action not found ? Error 404 !
            throw new Exception('Error 404 : action not found');
        }
    }
    else { // Default page
        test();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}
