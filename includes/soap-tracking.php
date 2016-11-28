<?php

/**
 * Tracking parameters
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
 * Track the shipping
 */
$results = $client->WSI2_TracingColisDetaille($params)->WSI2_TracingColisDetailleResult;
