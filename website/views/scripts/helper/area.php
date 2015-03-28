<?php
    $excludeBricks = $this->param("excludeBricks", array());
    $extraBricks = $this->param("extraBricks", array());

    echo $this->template("bootstrap/area.php", array("name" => $this->name, "excludeBricks" => $excludeBricks, "extraBricks" => $extraBricks));
