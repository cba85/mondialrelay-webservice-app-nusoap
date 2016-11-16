<form method="post" action="tracking.php">

    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-fw fa-cog text-mondialrelay"></i> <?php _e("Parameters") ?>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="enseigne"><?php _e("Brand") ?><sup>*</sup></label>
                        <input type="text" class="form-control" id="Enseigne" name="Enseigne" value="<?php echo $Enseigne ?>" required disabled>
                    </div>

                    <div class="form-group">
                        <label for="LIV_Rel_Pays"><?php _e("LIV Rel Country") ?> <em>(LIV_Rel_Pays)</em><sup>*</sup></label>
                        <select class="form-control" id="LIV_Rel_Pays" name="LIV_Rel_Pays" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="FR" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'FR') echo 'selected'; ?>>FR</option>
                            <option value="BE" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'BE') echo 'selected'; ?>>BE</option>
                            <option value="LU" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'LU') echo 'selected'; ?>>LU</option>
                            <option value="ES" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="DE" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'DE') echo 'selected'; ?>>DE</option>
                            <option value="IT" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'IT') echo 'selected'; ?>>IT</option>
                            <option value="PT" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'PT') echo 'selected'; ?>>PT</option>
                            <option value="UK" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'UK') echo 'selected'; ?>>UK</option>
                            <option value="IE" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'IE') echo 'selected'; ?>>IE</option>
                            <option value="NL" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'NL') echo 'selected'; ?>>NL</option>
                            <option value="AT" <?php if (isset($_POST['LIV_Rel_Pays']) && $_POST['LIV_Rel_Pays'] == 'AT') echo 'selected'; ?>>AT</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="cle_privee"><?php _e("Shipping") ?><sup>*</sup></label>
                        <input type="text" class="form-control" id="Expeditions" name="Expeditions" placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Expeditions'])) echo $_POST['Expeditions']; ?>" required>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel-footer text-center">
            <button type="submit" class="btn btn-success btn-lg" id="create_expedition"><i class="fa fa-fw fa-check-circle"></i> <?php _e("Track shipping") ?></button>
        </div>

    </div>

</form>