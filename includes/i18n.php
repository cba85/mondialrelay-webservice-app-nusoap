<?php

/**
 * Return translation text
 *
 * @param      $token
 *
 * @return mixed
 */
function __($token) {
    global $LANG;

    $translations = include('./lang/' . $LANG . '.php');

    if (empty($LANG) || empty('translations') || !array_key_exists($token, $translations))
    {
        return $token;
    }
    else
    {
        return $translations[$token];
    }
}

/**
 * Display translation text
 *
 * @param      $token
 * @param null $lang
 */
function _e($token, $lang = null) {
    echo __($token, $lang);
}
