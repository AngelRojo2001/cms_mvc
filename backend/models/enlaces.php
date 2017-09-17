<?php

class EnlacesModels {

    public function enlacesModel($enlaces) {

        if ($enlaces == "inicio" ||
                $enlaces == "slide" ||
                $enlaces == "articulos" ||
                $enlaces == "galeria" ||
                $enlaces == "videos" ||
                $enlaces == "suscriptores" ||
                $enlaces == "mensajes" ||
                $enlaces == "perfil") {

            $module = "views/modules/" . $enlaces . ".php";
        } elseif ($enlaces == "index") {
            $module = "views/modules/ingreso.php";
        } else {
            $module = "views/modules/ingreso.php";
        }

        return $module;
    }

}
