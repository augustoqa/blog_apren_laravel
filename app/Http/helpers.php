<?php

function setActiveRoute($name, $cssClass = 'active')
{
    return request()->routeIs($name) ? $cssClass : '';
}

