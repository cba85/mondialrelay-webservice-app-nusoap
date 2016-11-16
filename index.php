<?php

/**
 * Include nusoap, conf file and soap request
 */
require_once 'views/_partials/includes.php';

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <?php require_once 'views/_partials/head.php';?>
        <title><?php _e('Web Service Mondial Relay test') ?></title>
    </head>

    <body>

    <div class="block-grey">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">


                    <?php require_once 'views/_partials/header.php';?>

                    <?php require_once 'views/_partials/navbar.php';?>

                    <h2 class="text-center"><?php _e("Mondial Relay shipping creation"); ?></h2>

                    <p class="lead text-center"><?php _e("Create a Mondial Relay shipping with your parameters") ?></p>

                    </div>
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-12">

            <?php if ($_POST) { include('views/shipping/shipping-request.php'); } ?>

            <?php require_once 'views/shipping/shipping-parameters.php';?>

            <?php require_once 'views/_partials/instructions.php';?>

            <hr>

            <?php require_once 'views/_partials/footer.php';?>

            </div>
        </div>

    </div>

    <?php require_once 'views/_partials/scripts.php';?>

    </body>

</html>

