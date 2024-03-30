<?php

function as_object($array) {
    return json_decode(json_encode($array));
}

function require_view($view) {
    require(ROOT . "resources/views/" . $view . ".php");
}

function require_layout($layout) {
    require(ROOT . "resources/layouts/" . $layout . ".php");
}

function echo_link_style($style) {
    echo "<link rel=\"stylesheet\" href=\"assets/css/$style.css\">";
}

function echo_script_js($script) {
    echo "";
}

?>