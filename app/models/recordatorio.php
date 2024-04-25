<?php

namespace app\models;

class recordatorio extends Model {
    public function __construct() {
        parent::__construct();
        $this->campos = ["title", "content"];
    }

    function setValores($v) {
        $this->valores = $v;
    }
}
?>