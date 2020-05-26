<?php
class View
{

    public function show($name, $vars = array())
    {               
        $path = "views/". $name;
         
        if (file_exists($path) == false)
        {
            trigger_error ('Template `' . $path . '` does not exist.', E_USER_NOTICE);
            return false;
        }
 
        extract($vars);        
        include($path);
    }
}

?>