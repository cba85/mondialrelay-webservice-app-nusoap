<div class="container">
    <hr>
    <div class="row">

        <div class="col-sm-6">
            <h3><i class="fa fa-fw fa-cog text-mondialrelay"></i> <?php _e('Parameters') ?></h3>
            <pre><?php print_r($params); ?></pre>
        </div>

        <div class="col-sm-6">

            <h3><i class="fa fa-fw fa-truck text-mondialrelay"></i> <?php _e('Tracking') ?></h3>
            <?php if ($results->STAT == 0) { ?>
                <div class="alert alert-success text-center">
                    <i class="fa fa-fw fa-check-circle"></i> <strong><?php _e('Success') ?></strong>
                </div>
            <?php } else { ?>
                <div class="alert alert-danger">
                    <i class="fa fa-fw fa-times-circle"></i> <strong><?php _e('Error') ?> <?php echo $results->STAT; ?> :</strong> <?php echo statut($results->STAT); ?>
                </div>
            <?php } ?>
            <pre><?php print_r($results); ?></pre>
        </div>

    </div>

    <hr>

</div>