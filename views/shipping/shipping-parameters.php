<form method="post" action="">

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
                    <hr>
                    <div class="form-group">
                        <label for="ModeCol"><?php _e("Collect mode") ?> <em>(ModeCol)</em><sup>*</sup></label>
                        <select class="form-control" id="ModeCol" name="ModeCol" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="CCC" <?php if (isset($_POST['ModeCol']) && $_POST['ModeCol'] == 'CCC') echo 'selected'; ?>>CCC</option>
                            <option value="CDR" <?php if (isset($_POST['ModeCol']) && $_POST['ModeCol'] == 'CDR') echo 'selected'; ?>>CDR</option>
                            <option value="CDS" <?php if (isset($_POST['ModeCol']) && $_POST['ModeCol'] == 'CDS') echo 'selected'; ?>>CDS</option>
                            <option value="REL" <?php if (isset($_POST['ModeCol']) && $_POST['ModeCol'] == 'REL') echo 'selected'; ?>>REL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ModeLiv"><?php _e("Delivery mode") ?> <em>(ModeLiv)</em><sup>*</sup></label>
                        <select class="form-control" id="ModeLiv" name="ModeLiv" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="LCC" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == 'LCC') echo 'selected'; ?>>LCC</option>
                            <option value="LD1" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == 'LD1') echo 'selected'; ?>>LD1</option>
                            <option value="LDS" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == 'LDS') echo 'selected'; ?>>LDS</option>
                            <option value="24R" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == '24R') echo 'selected'; ?>>24R</option>
                            <option value="24L" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == '24L') echo 'selected'; ?>>24L</option>
                            <option value="24X" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == '24X') echo 'selected'; ?>>24X</option>
                            <option value="ESP" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == 'ESP') echo 'selected'; ?>>ESP</option>
                            <option value="DRI" <?php if (isset($_POST['ModeLiv']) && $_POST['ModeLiv'] == 'DRI') echo 'selected'; ?>>DRI</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="NDossier" class="text-muted"><?php _e("File number") ?> <em>(NDossier)</em></label>
                        <input type="text" class="form-control" id="NDossier" name="NDossier" maxlength="15" value="<?php if(isset($_POST['NDossier'])) echo $_POST['Expe_Ad3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="NClient" class="text-muted"><?php _e("Client number") ?> <em>(NClient)</em></label>
                        <input type="text" class="form-control" id="NClient" name="NClient" maxlength="9" value="<?php if(isset($_POST['NClient'])) echo $_POST['NClient']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Expe_Langage"><?php _e("Sender language") ?> <em>(Expe_Langage)</em><sup>*</sup></label>
                        <select class="form-control" id="Expe_Langage" name="Expe_Langage" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="FR" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'FR') echo 'selected'; ?>>FR</option>
                            <option value="ES" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="DE" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'DE') echo 'selected'; ?>>DE</option>
                            <option value="IT" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'IT') echo 'selected'; ?>>IT</option>
                            <option value="PT" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'PT') echo 'selected'; ?>>PT</option>
                            <option value="UK" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'UK') echo 'selected'; ?>>UK</option>
                            <option value="IE" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'IE') echo 'selected'; ?>>IE</option>
                            <option value="NL" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'NL') echo 'selected'; ?>>NL</option>
                            <option value="AT" <?php if (isset($_POST['Expe_Langage']) && $_POST['Expe_Langage'] == 'AT') echo 'selected'; ?>>AT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Expe_Ad1"><?php _e("Sender") ?> <em>(Expe_Ad1)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Expe_Ad1" name="Expe_Ad1" maxlength="32" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Expe_Ad1'])) echo $_POST['Expe_Ad1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Ad2" class="text-muted"><?php _e("Sender") ?> (<?php _e("additional") ?>) <em>(Expe_Ad2)</em></label>
                        <input type="text" class="form-control" id="Expe_Ad2" name="Expe_Ad2" maxlength="32" value="<?php if(isset($_POST['Expe_Ad2'])) echo $_POST['Expe_Ad2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Ad3"><?php _e("Sender") ?> (<?php _e("route") ?>) <em>(Expe_Ad3)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Expe_Ad3" name="Expe_Ad3" maxlength="32" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Expe_Ad3'])) echo $_POST['Expe_Ad3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Ad4" class="text-muted"><?php _e("Sender") ?> (<?php _e("additional") ?>) <em>(Expe_Ad4)</em></label>
                        <input type="text" class="form-control" id="Expe_Ad4" name="Expe_Ad4" maxlength="32" value="<?php if(isset($_POST['Expe_Ad4'])) echo $_POST['Expe_Ad4']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Ville"><?php _e("Sender") ?> (<?php _e("city") ?>) <em>(Expe_Ville)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Expe_Ville" name="Expe_Ville" maxlength="26" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Expe_Ville'])) echo $_POST['Expe_Ville']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_CP"><?php _e("Sender") ?> (<?php _e("zip code") ?>) <em>(Expe_CP)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Expe_CP" name="Expe_CP" maxlength="5" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Expe_CP'])) echo $_POST['Expe_CP']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Pays"><?php _e("Sender") ?> (<?php _e("country code") ?>) <em>(Expe_Pays)</em><sup>*</sup></label>
                        <select class="form-control" id="Expe_Pays" name="Expe_Pays" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="FR" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'FR') echo 'selected'; ?>>FR</option>
                            <option value="BE" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'BE') echo 'selected'; ?>>BE</option>
                            <option value="LU" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'LU') echo 'selected'; ?>>LU</option>
                            <option value="ES" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="DE" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'DE') echo 'selected'; ?>>DE</option>
                            <option value="IT" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'IT') echo 'selected'; ?>>IT</option>
                            <option value="PT" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'PT') echo 'selected'; ?>>PT</option>
                            <option value="UK" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'UK') echo 'selected'; ?>>UK</option>
                            <option value="IE" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'IE') echo 'selected'; ?>>IE</option>
                            <option value="NL" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'NL') echo 'selected'; ?>>NL</option>
                            <option value="AT" <?php if (isset($_POST['Expe_Pays']) && $_POST['Expe_Pays'] == 'AT') echo 'selected'; ?>>AT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Expe_Tel1"><?php _e("Sender") ?> (<?php _e("landline") ?>) <em>(Expe_Tel1)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Expe_Tel1" name="Expe_Tel1" maxlength="13" required value="<?php if(isset($_POST['Expe_Tel1'])) echo $_POST['Expe_Tel1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Tel2" class="text-muted"><?php _e("Sender") ?> (<?php _e("mobile phone") ?>) <em>(Expe_Tel2)</em></label>
                        <input type="text" class="form-control" id="Expe_Tel2" name="Expe_Tel2" maxlength="13" value="<?php if(isset($_POST['Expe_Tel2'])) echo $_POST['Expe_Tel2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Expe_Mail" class="text-muted"><?php _e("Sender") ?> (<?php _e("email address") ?>) <em>(Expe_Mail)</em></label>
                        <input type="email" class="form-control" id="Expe_Mail" name="Expe_Mail" maxlength="70" value="<?php if(isset($_POST['Expe_Mail'])) echo $_POST['Expe_Mail']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Dest_Langage"><?php _e("Recipient language") ?> <em>(Dest_Langage)</em><sup>*</sup></label>
                        <select class="form-control" id="Dest_Langage" name="Dest_Langage" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="FR" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'FR') echo 'selected'; ?>>FR</option>
                            <option value="ES" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="DE" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'DE') echo 'selected'; ?>>DE</option>
                            <option value="IT" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'IT') echo 'selected'; ?>>IT</option>
                            <option value="PT" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'PT') echo 'selected'; ?>>PT</option>
                            <option value="UK" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'UK') echo 'selected'; ?>>UK</option>
                            <option value="IE" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'IE') echo 'selected'; ?>>IE</option>
                            <option value="NL" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'NL') echo 'selected'; ?>>NL</option>
                            <option value="AT" <?php if (isset($_POST['Dest_Langage']) && $_POST['Dest_Langage'] == 'AT') echo 'selected'; ?>>AT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Dest_Ad1"><?php _e("Recipient") ?> <em>(Dest_Ad1)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Dest_Ad1" name="Dest_Ad1" maxlength="32" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Dest_Ad1'])) echo $_POST['Dest_Ad1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Ad2" class="text-muted"><?php _e("Recipient") ?> (<?php _e("additional") ?>) <em>(Dest_Ad2)</em></label>
                        <input type="text" class="form-control" id="Dest_Ad2" name="Dest_Ad2" maxlength="32" value="<?php if(isset($_POST['Dest_Ad2'])) echo $_POST['Dest_Ad2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Ad3"><?php _e("Recipient") ?> (<?php _e("route") ?>) <em>(Dest_Ad3)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Dest_Ad3" name="Dest_Ad3" maxlength="32" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Dest_Ad3'])) echo $_POST['Dest_Ad3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Ad4" class="text-muted"><?php _e("Recipient") ?> (<?php _e("additional") ?>) <em>(Dest_Ad4)</em></label>
                        <input type="text" class="form-control" id="Dest_Ad4" name="Dest_Ad4" maxlength="32" value="<?php if(isset($_POST['Dest_Ad4'])) echo $_POST['Dest_Ad4']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Ville"><?php _e("Recipient") ?> (<?php _e("city") ?>) <em>(Dest_Ville)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Dest_Ville" name="Dest_Ville" maxlength="26" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Dest_Ville'])) echo $_POST['Dest_Ville']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_CP"><?php _e("Recipient") ?> (<?php _e("zip code") ?>) <em>(Dest_CP)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Dest_CP" name="Dest_CP" maxlength="5" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Dest_CP'])) echo $_POST['Dest_CP']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Pays"><?php _e("Recipient") ?> (<?php _e("country code") ?>) <em>(Dest_Pays)</em><sup>*</sup></label>
                        <select class="form-control" id="Dest_Pays" name="Dest_Pays" required>
                            <option value="" disabled selected><?php _e("Select") ?> (<?php _e("required") ?>)</option>
                            <option value="FR" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'FR') echo 'selected'; ?>>FR</option>
                            <option value="BE" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'BE') echo 'selected'; ?>>BE</option>
                            <option value="LU" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'LU') echo 'selected'; ?>>LU</option>
                            <option value="ES" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="DE" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'DE') echo 'selected'; ?>>DE</option>
                            <option value="IT" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'IT') echo 'selected'; ?>>IT</option>
                            <option value="PT" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'PT') echo 'selected'; ?>>PT</option>
                            <option value="UK" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'UK') echo 'selected'; ?>>UK</option>
                            <option value="IE" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'IE') echo 'selected'; ?>>IE</option>
                            <option value="NL" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'NL') echo 'selected'; ?>>NL</option>
                            <option value="AT" <?php if (isset($_POST['Dest_Pays']) && $_POST['Dest_Pays'] == 'AT') echo 'selected'; ?>>AT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Dest_Tel1"><?php _e("Recipient") ?> (<?php _e("landline") ?>) <em>(Dest_Tel1)</em><sup>*</sup></label>
                        <input type="text" class="form-control" id="Dest_Tel1" name="Dest_Tel1" maxlength="13" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Dest_Tel1'])) echo $_POST['Dest_Tel1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Tel2" class="text-muted"><?php _e("Recipient") ?> (<?php _e("mobile phone") ?>) <em>(Dest_Tel2)</em></label>
                        <input type="text" class="form-control" id="Dest_Tel2" name="Dest_Tel2" maxlength="13" value="<?php if(isset($_POST['Dest_Tel2'])) echo $_POST['Dest_Tel2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dest_Mail" class="text-muted"><?php _e("Recipient") ?> (<?php _e("email address") ?>) <em>(Dest_Mail)</em></label>
                        <input type="email" class="form-control" id="Dest_Mail" name="Dest_Mail" maxlength="70" value="<?php if(isset($_POST['Dest_Mail'])) echo $_POST['Dest_Mail']; ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="cle_privee"><?php _e("Private key") ?><sup>*</sup></label>
                        <input type="text" class="form-control" id="Cle_Privee" name="Cle_Privee" value="<?php echo $ClePrivee ?>" required disabled>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Poids"><?php _e("Weight in grammes") ?> <em>(Poids)</em><sup>*</sup></label>
                        <input type="number" class="form-control" id="Poids" name="Poids" maxlength="7" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['Poids'])) echo $_POST['Poids']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Longueur" class="text-muted"><?php _e("Length in cm") ?> <em>(Longueur)</em></label>
                        <input type="number" class="form-control" id="Longueur" name="Longueur" maxlength="7" value="<?php if(isset($_POST['Longueur'])) echo $_POST['Longueur']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Taille" class="text-muted"><?php _e("Size") ?> <em>(Taille)</em></label>
                        <select class="form-control" id="Taille" name="Taille">
                            <option value="" disabled selected>Choisir</option>
                            <option value="XS" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == 'XS') echo 'selected'; ?>>XS</option>
                            <option value="S" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == 'S') echo 'selected'; ?>>S</option>
                            <option value="M" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == 'M') echo 'selected'; ?>>M</option>
                            <option value="L" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == 'L') echo 'selected'; ?>>L</option>
                            <option value="XL" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == 'XL') echo 'selected'; ?>>XL</option>
                            <option value="XXL" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == 'XXL') echo 'selected'; ?>>XXL</option>
                            <option value="3XL" <?php if (isset($_POST['Taille']) && $_POST['Taille'] == '3XL') echo 'selected'; ?>>3XL</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="NbColis"><?php _e("Number of packages") ?> <em>(NbColis)</em><sup>*</sup></label>
                        <input type="number" class="form-control" id="NbColis" name="NbColis" maxlength="7" placeholder="<?php _e("Required") ?>" required value="<?php if(isset($_POST['NbColis'])) echo $_POST['NbColis']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="CRT_Valeur"><?php _e("Cash on delivery amount") ?> <em>(CRT_Valeur)</em><sup>*</sup></label>
                        <input type="number" class="form-control" id="CRT_Valeur" name="CRT_Valeur" maxlength="7" required placeholder="<?php _e("Required") ?>" value="<?php if(isset($_POST['CRT_Valeur'])) echo $_POST['CRT_Valeur']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="CRT_Devise" class="text-muted"><?php _e("Cash on delivery currency") ?> <em>(CRT_Devise)</em></label>
                        <select class="form-control" id="CRT_Devise" name="CRT_Devise">
                            <option value="" disabled selected><?php _e("Select") ?></option>
                            <option value="EUR" <?php if (isset($_POST['CRT_Devise']) && $_POST['CRT_Devise'] == 'EUR') echo 'selected'; ?>>EUR</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Exp_Valeur" class="text-muted"><?php _e("Shipping amount") ?> <em>(Exp_Valeur)</em></label>
                        <input type="number" class="form-control" id="Exp_Valeur" name="Exp_Valeur" maxlength="7" value="<?php if(isset($_POST['Exp_Valeur'])) echo $_POST['Exp_Valeur']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Exp_Devise" class="text-muted"><?php _e("Shipping currency") ?> <em>(Exp_Devise)</em></label>
                        <select class="form-control" id="Exp_Devise" name="Exp_Devise">
                            <option value="" disabled selected><?php _e("Select") ?></option>
                            <option value="EUR" <?php if (isset($_POST['Exp_Devise']) && $_POST['Exp_Devise'] == 'EUR') echo 'selected'; ?>>EUR</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="COL_Rel_Pays"><?php _e("COL Rel Country") ?> <em>(COL_Rel_Pays)</em></label>
                        <select class="form-control" id="COL_Rel_Pays" name="COL_Rel_Pays">
                            <option value="" disabled selected><?php _e("Select") ?></option>
                            <option value="FR" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'FR') echo 'selected'; ?>>FR</option>
                            <option value="BE" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'BE') echo 'selected'; ?>>BE</option>
                            <option value="LU" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'LU') echo 'selected'; ?>>LU</option>
                            <option value="ES" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="DE" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'DE') echo 'selected'; ?>>DE</option>
                            <option value="IT" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'IT') echo 'selected'; ?>>IT</option>
                            <option value="PT" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'PT') echo 'selected'; ?>>PT</option>
                            <option value="UK" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'UK') echo 'selected'; ?>>UK</option>
                            <option value="IE" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'IE') echo 'selected'; ?>>IE</option>
                            <option value="NL" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'NL') echo 'selected'; ?>>NL</option>
                            <option value="AT" <?php if (isset($_POST['COL_Rel_Pays']) && $_POST['COL_Rel_Pays'] == 'AT') echo 'selected'; ?>>AT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="COL_Rel"><?php _e("COL Rel") ?> <em>(COL_Rel)</em></label>
                        <input type="number" class="form-control" id="COL_Rel" name="COL_Rel" maxlength="6" value="<?php if(isset($_POST['COL_Rel'])) echo $_POST['COL_Rel']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="LIV_Rel_Pays"><?php _e("LIV Rel Country") ?> <em>(LIV_Rel_Pays)</em></label>
                        <select class="form-control" id="LIV_Rel_Pays" name="LIV_Rel_Pays">
                            <option value="" disabled selected><?php _e("Select") ?></option>
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
                    <div class="form-group">
                        <label for="LIV_Rel"><?php _e("LIV Rel") ?> <em>(LIV_Rel)</em></label>
                        <input type="number" class="form-control" id="LIV_Rel" name="LIV_Rel" maxlength="6" value="<?php if(isset($_POST['LIV_Rel'])) echo $_POST['LIV_Rel']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="TAvisage" class="text-muted"><?php _e("Ask request") ?> <em>(TAvisage)</em></label>
                        <select class="form-control" id="TAvisage" name="TAvisage">
                            <option value="" disabled selected><?php _e("Select") ?></option>
                            <option value="O" <?php if (isset($_POST['TAvisage']) && $_POST['TAvisage'] == 'O') echo 'selected'; ?>><?php _e("Yes") ?></option>
                            <option value="N" <?php if (isset($_POST['TAvisage']) && $_POST['TAvisage'] == 'N') echo 'selected'; ?>><?php _e("No") ?></option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Montage" class="text-muted"><?php _e("Assembly time") ?> <em>(Montage)</em></label>
                        <input type="number" class="form-control" id="Montage" name="Montage" maxlength="3" value="<?php if(isset($_POST['Montage'])) echo $_POST['Montage']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="TRDV" class="text-muted"><?php _e("Appointment request") ?> <em>(TRDV)</em></label>
                        <select class="form-control" id="TRDV" name="TRDV">
                            <option value="" disabled selected><?php _e("Select") ?></option>
                            <option value="O" <?php if (isset($_POST['TRDV']) && $_POST['TRDV'] == 'O') echo 'selected'; ?>><?php _e("Yes") ?></option>
                            <option value="N" <?php if (isset($_POST['TRDV']) && $_POST['TRDV'] == 'N') echo 'selected'; ?>><?php _e("No") ?></option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Assurance" class="text-muted"><?php _e("Guarantee level") ?> <em>(Assurance)</em></label>
                        <select class="form-control" id="Assurance" name="Assurance">
                            <option value="" disabled selected><?php _e("Select") ?></option>
                            <option value="0" <?php if (isset($_POST['Assurance']) && $_POST['Assurance'] == '0') echo 'selected'; ?>>0</option>
                            <option value="1" <?php if (isset($_POST['Assurance']) && $_POST['Assurance'] == '1') echo 'selected'; ?>>1</option>
                            <option value="2" <?php if (isset($_POST['Assurance']) && $_POST['Assurance'] == '2') echo 'selected'; ?>>2</option>
                            <option value="3" <?php if (isset($_POST['Assurance']) && $_POST['Assurance'] == '3') echo 'selected'; ?>>3</option>
                            <option value="4" <?php if (isset($_POST['Assurance']) && $_POST['Assurance'] == '4') echo 'selected'; ?>>4</option>
                            <option value="5" <?php if (isset($_POST['Assurance']) && $_POST['Assurance'] == '5') echo 'selected'; ?>>5</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Instructions" class="text-muted"><?php _e("Instructions") ?> <em>(Instructions)</em></label>
                        <input type="text" class="form-control" id="Instructions" name="Instructions" maxlength="31" value="<?php if(isset($_POST['Instructions'])) echo $_POST['Instructions']; ?>">
                    </div>
                </div>

            </div>
        </div>

        <div class="panel-footer text-center">
            <button type="submit" class="btn btn-success btn-lg" id="create_expedition"><i class="fa fa-fw fa-check-circle"></i> <?php _e("Create shipping") ?></button>
        </div>

    </div>

</form>