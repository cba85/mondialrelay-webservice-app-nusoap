<?php

/**
 * Check if a $_POST parameter exists
 *
 * @param $value
 * @return null
 */
function checkParameter($value) {
    if (array_key_exists($value, $_POST) == FALSE)
    {
        return null;
    }
    else
    {
        return $_POST[$value];
    }
}