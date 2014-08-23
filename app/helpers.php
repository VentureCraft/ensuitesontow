<?php


function body_classes()
{
    $extras = func_get_args();

    if (sizeof(Request::segments()) < 1) {
        $extras[] = 'home';
    }
    return implode(' ', array_merge(Request::segments(), $extras));
}


function activeState($routes, $active = 'active')
{

    foreach((array)$routes as $route)
    {
        if(Route::currentRouteNamed($route))
        {
            return $active;
        }
        else
        {
            if(call_user_func_array('Request::is', (array)$route))
            {
                return $active;
            }
        }
    }

    return '';

}