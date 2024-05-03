<?php 
use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Url;
use Pecee\Http\Response;
use Pecee\Http\Request;
use Jenssegers\Blade\Blade;

/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|null $name
 * @param string|array|null $parameters
 * @param array|null $getParams
 * @return \Pecee\Http\Url
 * @throws \InvalidArgumentException
 */
function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
{
    return Router::getUrl($name, $parameters, $getParams);
}

/**
 * @return \Pecee\Http\Response
 */
function response(): Response
{
    return Router::response();
}

/**
 * @return \Pecee\Http\Request
 */
function request(): Request
{
    return Router::request();
}

/**
 * Get input class
 * @param string|null $index Parameter index name
 * @param string|mixed|null $defaultValue Default return value
 * @param array ...$methods Default methods
 * @return \Pecee\Http\Input\InputHandler|array|string|null
 */
function input($index = null, $defaultValue = null, ...$methods)
{
    if ($index !== null) {
        return request()->getInputHandler()->value($index, $defaultValue, ...$methods);
    }

    return request()->getInputHandler();
}

/**
 * @param string $url
 * @param int|null $code
 */
function redirect(string $url, ?int $code = null): void
{
    if ($code !== null) {
        response()->httpCode($code);
    }

    response()->redirect($url);
}

/**
 * Get current csrf-token
 * @return string|null
 */
function csrf_token(): ?string
{
    $baseVerifier = Router::router()->getCsrfVerifier();
    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }

    return null;
}

function getPrefixLink() {
    //xử lý lấy ra web root
    if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {
    $protocol = 'https://';
    } else {
    $protocol = 'http://';
    }

    $docRoot =  str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']);
    $pathRoot = str_replace('\\','/',_WEB_PATH_ROOT);
    $path = preg_replace('~^'.$docRoot.'~', '', $pathRoot);
    return $protocol.$_SERVER['HTTP_HOST'].$path;
}

function view($path, $data = []) {
    $blade = new Blade(_PATH_VIEW, _PATH_CACHE);
    return $blade->render($path, $data);
}

function data($key='', $value='') {
    if(!empty($key)) {
        if(!empty($value)) {
            $_SESSION[$key] = $value;
            return true;
        } else {
            if(isset($_SESSION[$key]))
            return $_SESSION[$key];
        }
    }
    return false;
}

function delete($key='') {
    if(!empty($key)) {
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        } 
        return false;
    } else {
        session_destroy();
        return true;
    }
 }

//tạo => tương tự data, gọi => tự động xóa 
function flash($key='', $value='') {
    $flashData = data($key, $value);
    if(empty($value)) {
       delete($key);
       return $flashData;
    }
}