<?php

function as_object($array) {
    return json_decode(json_encode($array));
}

function require_layout($layout) {
    require_once(LAYOUTS . $layout . ".php");
}

function echo_link_style($style) {
    echo "<link rel=\"stylesheet\" href=\"assets/css/$style.css\">";
}

function echo_script_js($script) {
    echo "<script src=\"/assets/js/$script.js\"></script>";
}

?>