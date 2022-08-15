<?php 
/**
 * Parse current url 
 */
function getParametersFromUrl(): ?Array {
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url_params = parse_url($url);
    if(array_key_exists("query", $url_params)){
        parse_str($url_params['query'], $params);
        return $params;
    }
    return null;

}


?>