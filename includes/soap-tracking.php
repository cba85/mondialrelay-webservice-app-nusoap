<?php

/**
 * Tracking parameters
 */
$params = array(
    'Enseigne'       => $Enseigne,
    'Expeditions'    => $_POST['Expeditions'],
    'Langue'         => $_POST['LIV_Rel_Pays'],
);

/**
 * Generation of the security key
 */
$code = implode("", $params);
$code .= $ClePrivee;
$params["Security"] = strtoupper(md5($code));

/**
 * Track the shipping
 */
$results = $client->WSI2_TracingColisDetaille($params)->WSI2_TracingColisDetailleResult;
