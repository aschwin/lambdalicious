<?php
atom(@raise);

/**
 * Raise an error.
 * @param $error
 * @return null
 * @throws λlicious_failed
 */
function raise($error)
{
    throw new λlicious_failed($error);
    return null; // for IDE's
}