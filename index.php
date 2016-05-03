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

    include'class/browser.php';
    require_once('temp/header.php');
?>
<?php
    $cs = new Browser();
    $p  = @$_GET['ref'];
    $cs->pageload($p);      
?>
<?php
    require_once ('temp/footer.php');
?>
