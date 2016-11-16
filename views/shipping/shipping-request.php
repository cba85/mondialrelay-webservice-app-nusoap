<div class="container">
    <hr>
    <div class="row">

        <div class="col-sm-6">
            <h3><i class="fa fa-fw fa-cog text-mondialrelay"></i> <?php _e('Parameters') ?></h3>
            <pre><?php print_r($params); ?></pre>
        </div>

        <div class="col-sm-6">
            <h3><i class="fa fa-fw fa-arrow-circle-right text-mondialrelay"></i> <?php _e('Response') ?></h3>
            <?php
            if ($results) { ?>
                <div class="alert alert-danger text-center">
                    <i class="fa fa-fw fa-times-circle"></i> <strong><?php _e('Error') ?> <?php echo $results ?></strong> : <?php echo statut($results) ?>
                </div>
            <?php } else { ?>
                <div class="alert alert-success text-center">
                    <i class="fa fa-fw fa-check-circle"></i> <strong><?php _e('Success') ?></strong>
                </div>
            <?php } ?>
            <pre><?php print_r($expedition); ?></pre>
        </div>

    </div>

    <hr>

</div>