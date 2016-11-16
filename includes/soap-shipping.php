<?php

/**
 * Shipping parameters
 */
$params = array(
    'Enseigne'        => $Enseigne
    ,'ModeCol'        => $_POST['ModeCol']
    ,'ModeLiv'        => $_POST['ModeLiv']
    ,'NDossier'       => $_POST['NDossier']
    ,'NClient'        => $_POST['NClient']
    ,'Expe_Langage'   => $_POST['Expe_Langage']
    ,'Expe_Ad1'       => $_POST['Expe_Ad1']
    ,'Expe_Ad2'       => $_POST['Expe_Ad2']
    ,'Expe_Ad3'       => $_POST['Expe_Ad3']
    ,'Expe_Ad4'       => $_POST['Expe_Ad4']
    ,'Expe_Ville'     => $_POST['Expe_Ville']
    ,'Expe_CP'        => $_POST['Expe_CP']
    ,'Expe_Pays'      => $_POST['Expe_Pays']
    ,'Expe_Tel1'      => $_POST['Expe_Tel1']
    ,'Expe_Tel2'      => $_POST['Expe_Tel2']
    ,'Expe_Mail'      => $_POST['Expe_Mail']
    ,'Dest_Langage'   => $_POST['Dest_Langage']
    ,'Dest_Ad1'       => $_POST['Dest_Ad1']
    ,'Dest_Ad2'       => $_POST['Dest_Ad2']
    ,'Dest_Ad3'       => $_POST['Dest_Ad3']
    ,'Dest_Ad4'       => $_POST['Dest_Ad4']
    ,'Dest_Ville'     => $_POST['Dest_Ville']
    ,'Dest_CP'        => $_POST['Dest_CP']
    ,'Dest_Pays'      => $_POST['Dest_Pays']
    ,'Dest_Tel1'      => $_POST['Dest_Tel1']
    ,'Dest_Mail'      => $_POST['Dest_Mail']
    ,'Poids'          => $_POST['Poids']
    ,'Longueur'       => $_POST['Longueur']
    ,'Taille'         => $_POST['Taille']
    ,'NbColis'        => $_POST['NbColis']
    ,'CRT_Valeur'     => $_POST['CRT_Valeur']
    ,'CRT_Devise'     => $_POST['CRT_Devise']
    ,'Exp_Valeur'     => $_POST['Exp_Valeur']
    ,'Exp_Devise'     => $_POST['Exp_Devise']
    ,'COL_Rel_Pays'   => $_POST['COL_Rel_Pays']
    ,'COL_Rel'        => $_POST['COL_Rel']
    ,'LIV_Rel_Pays'   => $_POST['LIV_Rel_Pays']
    ,'LIV_Rel'        => $_POST['LIV_Rel']
    ,'TAvisage'       => $_POST['TAvisage']
    ,'TReprise'       => $_POST['TReprise']
    ,'Montage'        => $_POST['Montage']
    ,'TRDV'           => $_POST['TRDV']
    ,'Instructions'   => $_POST['Instructions']
    ,'Assurance'      => $_POST['Assurance']
);

/**
 * Generation of the security key
 */
$code = implode("", $params);
$code .= $ClePrivee;
$params["Security"] = strtoupper(md5($code));

/**
 * Create the expedition
 */
$expedition = $client->WSI2_CreationExpedition($params)->WSI2_CreationExpeditionResult;
$results = $expedition->STAT;
