<?php

namespace app\models;

use app\classes\DB;

class recordatorio extends DB{
    public function __construct() {
        parent::__construct();
        $this->campos = ["title", "content"];
    }

    function setValores($v) {
        $this->valores = $v;
    }
}
?>