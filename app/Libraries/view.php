<?php

namespace  App\Libraries;

class View
{
    //Dibujar o requerir  de la vista que corresponde
    //
    public static function render($fileView,array $variables = [])
    {
        //lA FUNCION EXTRAC CUMPLE ESA FUNCION
        /*$array = ['cosa1' => 'Un texto', 'cosa2' => 'otro texto'];
        extract($array);
        $cosa1 = 'Un texto';
        $cosa2 = 'otro texto';*/

        extract($variables);

        require_once APP_PATH . "/views/$fileView.view.php";
        
    }
}