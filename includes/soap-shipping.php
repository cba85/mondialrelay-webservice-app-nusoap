<?php

/**
 * Shipping parameters
 */
$params = array(
    'Enseigne'        => $Enseigne
    ,'ModeCol'        => checkParameter('ModeCol')
    ,'ModeLiv'        => checkParameter('ModeLiv')
    ,'NDossier'       => checkParameter('NDossier')
    ,'NClient'        => checkParameter('NClient')
    ,'Expe_Langage'   => checkParameter('Expe_Langage')
    ,'Expe_Ad1'       => checkParameter('Expe_Ad1')
    ,'Expe_Ad2'       => checkParameter('Expe_Ad2')
    ,'Expe_Ad3'       => checkParameter('Expe_Ad3')
    ,'Expe_Ad4'       => checkParameter('Expe_Ad4')
    ,'Expe_Ville'     => checkParameter('Expe_Ville')
    ,'Expe_CP'        => checkParameter('Expe_CP')
    ,'Expe_Pays'      => checkParameter('Expe_Pays')
    ,'Expe_Tel1'      => checkParameter('Expe_Tel1')
    ,'Expe_Tel2'      => checkParameter('Expe_Tel2')
    ,'Expe_Mail'      => checkParameter('Expe_Mail')
    ,'Dest_Langage'   => checkParameter('Dest_Langage')
    ,'Dest_Ad1'       => checkParameter('Dest_Ad1')
    ,'Dest_Ad2'       => checkParameter('Dest_Ad2')
    ,'Dest_Ad3'       => checkParameter('Dest_Ad3')
    ,'Dest_Ad4'       => checkParameter('Dest_Ad4')
    ,'Dest_Ville'     => checkParameter('Dest_Ville')
    ,'Dest_CP'        => checkParameter('Dest_CP')
    ,'Dest_Pays'      => checkParameter('Dest_Pays')
    ,'Dest_Tel1'      => checkParameter('Dest_Tel1')
    ,'Dest_Mail'      => checkParameter('Dest_Mail')
    ,'Poids'          => checkParameter('Poids')
    ,'Longueur'       => checkParameter('Longueur')
    ,'Taille'         => checkParameter('Taille')
    ,'NbColis'        => checkParameter('NbColis')
    ,'CRT_Valeur'     => checkParameter('CRT_Valeur')
    ,'CRT_Devise'     => checkParameter('CRT_Devise')
    ,'Exp_Valeur'     => checkParameter('Exp_Valeur')
    ,'Exp_Devise'     => checkParameter('Exp_Devise')
    ,'COL_Rel_Pays'   => checkParameter('COL_Rel_Pays')
    ,'COL_Rel'        => checkParameter('COL_Rel')
    ,'LIV_Rel_Pays'   => checkParameter('LIV_Rel_Pays')
    ,'LIV_Rel'        => checkParameter('LIV_Rel')
    ,'TAvisage'       => checkParameter('TAvisage')
    ,'TReprise'       => checkParameter('TReprise')
    ,'Montage'        => checkParameter('Montage')
    ,'TRDV'           => checkParameter('TRDV')
    ,'Instructions'   => checkParameter('Instructions')
    ,'Assurance'      => checkParameter('Assurance')
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
