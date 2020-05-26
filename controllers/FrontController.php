
<?php

session_start();
require_once("utilities/View.php");
require_once("utilities/Constantes.php");

class FrontController
{
    static function main()
    {
        if(! empty($_GET['controlador']))
              $controllerName = $_GET['controlador'] . 'Controller';
        else
              $controllerName = "IndexController";
 
        //Lo mismo sucede con las acciones, si no hay acción, tomamos index como acción
        if(! empty($_GET['accion']))
              $actionName = $_GET['accion'];
        else
              $actionName = "index";
 
        $controllerPath = "controllers/" . $controllerName . '.php';
         
 
        if(is_file($controllerPath))
              require $controllerPath;
        else
              die('El recurso solicitado no existe');
 
              
        if (is_callable(array($controllerName, $actionName)) == false)
        {
            trigger_error ("El recurso solicitado no existe", E_USER_NOTICE);
            return false;
        }
        //Si todo esta bien, creamos una instancia del controlador y llamamos a la acción
        $controller = new $controllerName();
        $controller->$actionName();
    }
}
?>