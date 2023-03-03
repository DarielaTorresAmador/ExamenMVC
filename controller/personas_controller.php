<?php
    require_once("./models/personas_model.php");
    $menu = new Platillo();
    $pd = $menu->lista_platillos();
    require_once("./views/personas_view.phtml");
?>