<?php


function body_classes()
{
    $extras = func_get_args();

    if (sizeof(Request::segments()) < 1) {
        $extras[] = 'home';
    }
    return implode(' ', array_merge(Request::segments(), $extras));
}