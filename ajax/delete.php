<?php 
        require_once('../pdoClass.php');
        $server = "127.0.0.1";
        $user = "root";
        $pass = "";
        $dbname = "tz";
        $where = "id =".$_POST[id];
        $db = new DBClass($server, $user, $pass, $dbname);
        $post =  $db->delete('post' , $where);
        echo ($updated)? true : false;    
        $db = null;       
?>