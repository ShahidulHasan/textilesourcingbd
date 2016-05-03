<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shahidul
 *
 * @author shahidul
 */

class Browser {
    
    function pageload($page){
            $pages=@rawurldecode($page).".php";
            if($page){
                    if(file_exists('pages/'.$pages)){
                        require_once('pages/'.$pages); 		
                    }else{
                            echo"Your required url was not found";
                    }
            }else{
                    require_once('pages/home.php');
            }
    }

}

?>
