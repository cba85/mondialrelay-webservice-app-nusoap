<div>
    <ul class="nav nav-tabs">
        <li <?php if ($_SERVER['REQUEST_URI'] == '/') { echo 'class="active"'; } ?>><a href="."><i class="fa fa-fw text-mondialrelay fa-arrow-circle-right"></i> <?php _e('Shipping') ?></a></li>
        <li <?php if ($_SERVER['REQUEST_URI'] == '/barcodes.php') { echo 'class="active"'; } ?>><a href="barcodes.php"><i class="fa fa-fw text-mondialrelay fa-barcode"></i> <?php _e('Barcodes') ?></a></li>
        <li <?php if ($_SERVER['REQUEST_URI'] == '/tracking.php') { echo 'class="active"'; } ?>><a href="tracking.php"><i class="fa fa-fw text-mondialrelay fa-truck"></i> <?php _e('Tracking') ?></a></li>
    </ul>
</div>
