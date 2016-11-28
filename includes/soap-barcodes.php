<?php

/**
 * Barcodes parameters
 */
$params = array(
    'Enseigne'       => $Enseigne,
    'Expeditions'    => checkParameter('Expeditions'),
    'Langue'         => checkParameter('LIV_Rel_Pays'),
);

/**
 * Generation of the security key
 */
$code = implode("", $params);
$code .= $ClePrivee;
$params["Security"] = strtoupper(md5($code));

/**
 * Get the barcode
 */
$results = $client->WSI2_GetEtiquettes($params)->WSI2_GetEtiquettesResult;
