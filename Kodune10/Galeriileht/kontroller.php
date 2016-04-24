<?php
    session_start();
    if(!empty($_POST)){
           $tulemus = implode($_POST);
           $vastus = intval($tulemus);
           $_SESSION["haaletas"] = $tulemus;
        }
    if(empty($_SESSION)){
    $_SESSION["haaletas"] = 0;
    }
    require_once('head.html');
    require_once('masiiv.php');
        if( !empty($_GET)){
             $vaartus = $_GET;
        }else{
             $vaartus = array('pealeht');
        }
        if(!empty($_SESSION)){
            
            //Kommentri allolev kood välja selleks, et sessioon kustutada.
             /*if($_SESSION["haaletas"] == 10){
                 session_destroy();
                 echo "Sessioon kustutatud";
             }*/
             
             if(!empty($_POST) && $_SESSION["haaletas"] <= 6){
             require('tulemus.php');
             }
        }
        $leht = implode($vaartus);
        if(empty($_POST)){
        switch ($leht) {
        case 'pealeht':
        require('pealeht.html');
        break;
        
        case 'galerii':
        require('galerii.html');
        break;
        
        case 'vote':
           require('vote.html');
        break;
        
    }
  }
    require_once('foot.html');
?>
<!-- Kommentri allolev kood välja selleks, et sessioon kustutada -->
<!--form action="kontroller.php" method="POST">
    <input type="checkbox" name="DS" value="10">kustuta sessioon<br>
    <input type="submit" value="kustuta"/>-->