<?php

function localized_route($name, $parameters = [], $absolute = true)
{
    $locale = app()->getLocale();

    return route("$locale.$name", $parameters, $absolute);
}
