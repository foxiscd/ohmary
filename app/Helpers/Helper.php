<?php


/**
 * Определят активный ли данный URL,
 * используется в основном для добавление класса active в ссылки.
 * В параметрах можно передать дочерние страницы.
 * @param string $url
 * @param array $params
 * @return bool
 */
function is_active($url, $params = array())
{
    if (str_contains($url, config('app.url'))) {
        $url = str_replace(config('app.url'), '', $url);
    }

    //удаляем первый слеш, так как с ним не видит Request
    $url = substr($url, 1);
    if (!empty($params)) {
        if (Request::is($url)) {
            return true;
        }

        $current = url()->current();

        foreach ($params as $param) {
            if (strripos($current, $url . '/' . $param)) {
                return true;
            }
        }

        return false;
    }

    return Request::is($url . '/*') || Request::is($url) || Request::is(substr($url, 1));
}
