<?php

if ( ! function_exists('curly_braces'))
{
    function curly_braces($content)
    {
        preg_match_all('/{{(.*?)}}/', $content, $matches);
        return $matches[1];
    }
}

if ( ! function_exists('split_curly_braces_component'))
{
    function split_curly_braces_component($content)
    {
//        $matches = array();
//        preg_match_all('#\{{.*?\}}|[^ ]+#', $content, $matches);  // return split space
//        preg_match_all('/(?<=}{2}|^)(?!{{2}).*?(?={{2}|$)/s', $content, $matches); // remove inside curly braces
//        return $matches[0];
        $matches = preg_split('/({{[^}]*}})/', $content, 0, PREG_SPLIT_DELIM_CAPTURE);
        return $matches;
    }
}