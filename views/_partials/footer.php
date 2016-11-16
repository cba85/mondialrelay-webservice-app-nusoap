<footer class="footer">
    <div class="row">
        <div class="col-sm-10">
            <p>
                © 2016 <?php if(date('Y') > 2016) echo date('Y'); ?> <a href="http://www.clementbarbaza.com" target="_blank">Clément Barbaza</a> - <a href="https://www.mondialrelay-woocommerce.com" target="_blank"><?php _e("Mondial Relay WooCommerce plugin") ?></a>
                <br>
                <small><?php _e("Mondial Relay and Mondial Relay logo are registred trademarks of") ?> <a href="<?php echo $mondialrelay ?>" target="_blank">Mondial Relay</a>.</small>
            </p>
        </div>
        <div class="col-sm-2 text-right">
            <p>
                <a href="<?php echo $repository ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Github repository"><i class="fa fa-github fa-fw"></i></a>
                <span class="label label-default">v<?php echo $version ?></span>
            </p>
        </div>
    </div>
</footer>